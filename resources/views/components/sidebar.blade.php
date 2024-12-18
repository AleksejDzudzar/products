<div class="sidebar">
    <div class="d-flex flex-column">
        <a href="/products" class="p-3">Products</a>
        <a href="/categories" class="p-3">Categories</a>
        <a href="/orders" class="p-3">Orders</a>
        <a href="/newsletters" class="p-3">Newsletters</a>
        <a href="/admin/contact" class="p-3">Contact Form</a>
        <a href="/admin/privacy-policy" class="p-3">Privacy Policy</a>
        <a href="/admin/terms-services" class="p-3">Terms & Services</a>
    </div>
    <div class="mt-auto">
        <form action="{{ route('logout') }}" method="POST" class="p-3">
            @csrf
            <button type="submit" class="btn btn-danger w-100 py-2">Log Out</button>
        </form>
    </div>
</div>
