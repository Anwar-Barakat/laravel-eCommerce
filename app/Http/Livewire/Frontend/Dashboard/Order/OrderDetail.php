<?php

namespace App\Http\Livewire\Frontend\Dashboard\Order;

use App\Models\Order;
use Livewire\Component;

class OrderDetail extends Component
{
    public $order;

    public function mount(Order $order)
    {
        $this->order = $order;
    }

    public function cancelOrder()
    {
        if ($this->order->status != 'new' || $this->order->user_id != auth()->id()) {
            toastr()->error(__('msgs.something_went_wrong'));
            return false;
        }

        $this->order->status    = 'cancelled';
        $this->order->save();
        toastr()->info(__('msgs.cancelled', ['name' => __('order.order')]));
    }

    public function render()
    {
        return view('livewire.frontend.dashboard.order.order-detail');
    }
}
