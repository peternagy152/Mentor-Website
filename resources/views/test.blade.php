<div class="wrap-search center-section">
    <div class="wrap-search-form">
        <form action="/ContiueCheckout" id="form-search-top" name="form-search-top" method="Get">
            @csrf
            <input type="text" name="search" value="" placeholder="Search here...">
            <button type = "submit" form="form-search-top" type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
            <div class="wrap-list-cate">
                <input type="hidden" name="product-cate" value="0" id="product-cate">
                <a href="#" class="link-control">All Category</a>
                <ul class="list-cate">
                    <li class="level-0">All Category</li>

                </ul>
            </div>
        </form>
    </div>
</div>
