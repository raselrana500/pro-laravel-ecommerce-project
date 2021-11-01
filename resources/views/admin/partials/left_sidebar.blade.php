<div class="sl-sideleft-menu">
    <a href="{{ route('admin.index') }}" class="sl-menu-link active">
        <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
            <span class="menu-item-label">Dashboard</span>
        </div><!-- menu-item -->
    </a><!-- sl-menu-link -->


    @if (Auth::user()->product == 1)
        <a href="#" class="sl-menu-link">
            <div class="sl-menu-item">
                <i class="menu-item-icon icon ion-ios-bookmarks-outline tx-20"></i>
                <span class="menu-item-label">Products</span>
                <i class="menu-item-arrow fa fa-angle-down"></i>
            </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
            <li class="nav-item"><a href="{{ route('add.products') }}" class="nav-link">Add Product</a>
            </li>
            <li class="nav-item"><a href="{{ route('all.products') }}" class="nav-link">All Product</a>
            </li>
        </ul>
    @else

    @endif


    @if (Auth::user()->order == 1)
    <a href="#" class="sl-menu-link">
        <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-bookmarks-outline tx-20"></i>
            <span class="menu-item-label">Orders</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
        </div><!-- menu-item -->
    </a><!-- sl-menu-link -->
    <ul class="sl-menu-sub nav flex-column">
        <li class="nav-item"><a href="{{ route('admin.neworder') }}" class="nav-link">New Order</a></li>
        <li class="nav-item"><a href="{{ route('admin.payment.accept') }}" class="nav-link">Payment
                Accepted </a></li>
        <li class="nav-item"><a href="{{ route('admin.process.delivery') }}" class="nav-link">Processing
            </a></li>
        <li class="nav-item"><a href="{{ route('admin.delivery.order') }}" class="nav-link">Delivery
                Success</a></li>
        <li class="nav-item"><a href="{{ route('admin.all.order') }}" class="nav-link">All Order</a></li>
        <li class="nav-item"><a href="{{ route('admin.cancel.order') }}" class="nav-link">Cancel Order</a>
        </li>
    </ul>
    @else

    @endif


    @if (Auth::user()->stock == 1)
    <a href="#" class="sl-menu-link">
        <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-bookmarks-outline tx-20"></i>
            <span class="menu-item-label">Stock</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
        </div><!-- menu-item -->
    </a><!-- sl-menu-link -->
    <ul class="sl-menu-sub nav flex-column">
        <li class="nav-item"><a href="{{ route('admin.product.stock') }}" class="nav-link">Stock</a></li>
    </ul>
    @else

    @endif


    @if (Auth::user()->blog == 1)
    <a href="#" class="sl-menu-link">
        <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-bookmarks-outline tx-20"></i>
            <span class="menu-item-label">Blog</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
        </div><!-- menu-item -->
    </a><!-- sl-menu-link -->
    <ul class="sl-menu-sub nav flex-column">
        <li class="nav-item"><a href="{{ route('blog.category.list') }}" class="nav-link">Blog
                Category</a></li>
        <li class="nav-item"><a href="{{ route('add.blog.post') }}" class="nav-link">Add post</a></li>
        <li class="nav-item"><a href="{{ route('blog.all.post') }}" class="nav-link">All post</a></li>
    </ul>
    @else
    @endif


    @if (Auth::user()->category == 1)
    <a href="#" class="sl-menu-link">
        <div class="sl-menu-item">
            <i class="menu-item-icon ion-ios-pie-outline tx-20"></i>
            <span class="menu-item-label">Category</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
        </div><!-- menu-item -->
    </a><!-- sl-menu-link -->
    <ul class="sl-menu-sub nav flex-column">
        <li class="nav-item"><a href="{{ route('categories') }}" class="nav-link">Category</a></li>
        <li class="nav-item"><a href="{{ route('sub.categories') }}" class="nav-link">Sub-category</a>
        </li>
        <li class="nav-item"><a href="{{ route('brands') }}" class="nav-link">Brands</a></li>
    </ul>
    @else
    @endif


    @if (Auth::user()->coupon == 1)
    <a href="#" class="sl-menu-link">
        <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-gear-outline tx-24"></i>
            <span class="menu-item-label">Coupons</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
        </div><!-- menu-item -->
    </a><!-- sl-menu-link -->
    <ul class="sl-menu-sub nav flex-column">
        <li class="nav-item"><a href="{{ route('admin.coupon') }}" class="nav-link">Coupon</a></li>
    </ul>
    @else
    @endif


@if (Auth::user()->other == 1)
    <a href="#" class="sl-menu-link">
        <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-filing-outline tx-24"></i>
            <span class="menu-item-label">Others</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
        </div><!-- menu-item -->
    </a><!-- sl-menu-link -->
    <ul class="sl-menu-sub nav flex-column">
        <li class="nav-item"><a href="{{ route('admin.newslatter') }}" class="nav-link">Newslatter</a>
        </li>
        <li class="nav-item"><a href="{{ route('admin.seo') }}" class="nav-link">Seo Setting</a></li>
    </ul>
    @else
    @endif


    @if (Auth::user()->report == 1)
    <a href="#" class="sl-menu-link">
        <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-filing-outline tx-24"></i>
            <span class="menu-item-label">Reports</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
        </div><!-- menu-item -->
    </a><!-- sl-menu-link -->
    <ul class="sl-menu-sub nav flex-column">
        <li class="nav-item"><a href="{{ route('today.order') }}" class="nav-link">Today Order</a></li>
        <li class="nav-item"><a href="{{ route('today.delivery') }}" class="nav-link">Today Delivered</a>
        </li>
        <li class="nav-item"><a href="{{ route('this.month') }}" class="nav-link">This Month
                Delivered</a></li>
        <li class="nav-item"><a href="{{ route('search.report') }}" class="nav-link">Search Report</a>
        </li>
    </ul>
    @else
    @endif



    @if (Auth::user()->role == 1)
    <a href="#" class="sl-menu-link">
        <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-filing-outline tx-24"></i>
            <span class="menu-item-label">User Role</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
        </div><!-- menu-item -->
    </a><!-- sl-menu-link -->
    <ul class="sl-menu-sub nav flex-column">
        <li class="nav-item"><a href="{{ route('create.admin') }}" class="nav-link">Create User</a></li>
        <li class="nav-item"><a href="{{ route('admin.all.user') }}" class="nav-link">All User</a></li>
    </ul>
    @else
    @endif


    @if (Auth::user()->return == 1)
    <a href="#" class="sl-menu-link">
        <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-filing-outline tx-24"></i>
            <span class="menu-item-label">Return order</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
        </div><!-- menu-item -->
    </a><!-- sl-menu-link -->
    <ul class="sl-menu-sub nav flex-column">
        <li class="nav-item"><a href="{{ route('admin.return.request') }}" class="nav-link">Return request</a>
        </li>
        <li class="nav-item"><a href="{{ route('admin.all.return') }}" class="nav-link">Approved Request</a></li>
        <li class="nav-item"><a href="{{ route('admin.cancel.return') }}" class="nav-link">Cancel Request</a></li>
    </ul>
    @else
    @endif



    @if (Auth::user()->contact == 1)
    <a href="#" class="sl-menu-link">
        <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-filing-outline tx-24"></i>
            <span class="menu-item-label">Contact Message</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
        </div><!-- menu-item -->
    </a><!-- sl-menu-link -->
    <ul class="sl-menu-sub nav flex-column">
        <li class="nav-item"><a href="{{ route('all.message') }}" class="nav-link">All Message</a></li>
    </ul>
    @else
    @endif



    @if (Auth::user()->comment == 1)
    <a href="#" class="sl-menu-link">
        <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-filing-outline tx-24"></i>
            <span class="menu-item-label">Product Comments</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
        </div><!-- menu-item -->
    </a><!-- sl-menu-link -->
    <ul class="sl-menu-sub nav flex-column">
        <li class="nav-item"><a href="{{ route('today.order') }}" class="nav-link">New Comments</a>
        </li>
        <li class="nav-item"><a href="{{ route('today.order') }}" class="nav-link">All Comments</a>
        </li>
    </ul>
    @else
    @endif



    @if (Auth::user()->setting == 1)
    <a href="#" class="sl-menu-link">
        <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-filing-outline tx-24"></i>
            <span class="menu-item-label">Site Setting</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
        </div><!-- menu-item -->
    </a><!-- sl-menu-link -->
    <ul class="sl-menu-sub nav flex-column">
        <li class="nav-item"><a href="{{ route('admin.site.setting') }}" class="nav-link">Setting</a></li>
    </ul>
    @else
    @endif



    
</div>
