use Stripe\Stripe;
use Stripe\Customer;

class StripeService {

public function __construct() {
Stripe::setApiKey(config('services.stripe.secret')); // Assuming you've set the key in `config/services.php`
}

public function getSubscribedMembers() {
$subscribedMembers = [];

// List all customers (you might want to paginate this for large numbers of customers)
$customers = Customer::all(["limit" => 100]);

foreach ($customers->autoPagingIterator() as $customer) {
if ($customer->subscriptions->total_count > 0) {
$subscribedMembers[] = $customer;
}
}

return $subscribedMembers;
}
}