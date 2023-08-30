<?php

namespace App\Console\Commands;

use App\Models\Payment;
use Illuminate\Console\Command;

class PaymentStatusCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'payment:status';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This will update the payment status';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $afterFourtineDays = now()->addDays(14);
        $payments = Payment::where('status', 'pending')->whereDate('created_at', '>=', $afterFourtineDays);

        $payments->update([
            'status' => 'available'
        ]);
    }
}
