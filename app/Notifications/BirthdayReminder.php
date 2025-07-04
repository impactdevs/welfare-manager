<?php

namespace App\Notifications;

use App\Models\Employee;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Messages\DatabaseMessage;
use Illuminate\Notifications\Messages\BroadcastMessage;

class BirthdayReminder extends Notification implements ShouldQueue
{
    use Queueable;

    protected $employee;

    /**
     * Create a new notification instance.
     *
     * @param  \App\Models\Employee  $employee
     * @return void
     */
    public function __construct(Employee $employee)
    {
        $this->employee = $employee;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail', 'database', 'broadcast'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->subject("Birthday Reminder, {$this->employee->first_name}!")
                    ->line("Today is the birthday of {$this->employee->first_name} {$this->employee->last_name}. Please wish them!")
                    ->line("UNCST MANAGEMENT")
                    ->line('Thank you for using our application!');
    }

    /**
     * Get the database notification representation.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\DatabaseMessage
     */
    public function toDatabase($notifiable)
    {
        return new DatabaseMessage([
            'employee_id' => $this->employee->employee_id,
            'employee_name' => $this->employee->first_name,
            'message' => "Today is the birthday of {$this->employee->first_name} {$this->employee->last_name}. Please wish them!"
        ]);
    }

    /**
     * Get the broadcast representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\BroadcastMessage
     */
    public function toBroadcast($notifiable)
    {
        return new BroadcastMessage([
            'employee_id' => $this->employee->employee_id,
            'employee_name' => $this->employee->first_name,
            'message' => "Today is the birthday of {$this->employee->first_name} {$this->employee->last_name}. Please wish them!"
        ]);
    }
}
