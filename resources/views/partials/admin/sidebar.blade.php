<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li id="dashboard">
                    <a href="/dashboard"><img src="{{ asset('template/img/icons/dashboard.svg') }}" alt="img" /><span>
                            Dashboard</span>
                    </a>
                </li>
                <li class="submenu" id="slider">
                    <a href="javascript:void(0);"><img src="{{ asset('template/img/icons/transcation.svg') }}"
                            alt="img" /><span>
                            Slider</span>
                        <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="{{ route('admin.slider.index') }}">Slider List</a></li>
                        <li><a href="{{ route('admin.slider.create') }}">Add Slider</a></li>
                    </ul>
                </li>
                <li class="submenu" id="pages">
                    <a href="javascript:void(0);"><img src="{{ asset('template/img/icons/transcation.svg') }}"
                            alt="img" />
                        <span>Pages</span>
                        <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="">About Us</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="javascript:void(0);"><img src="{{ asset('template/img/icons/transcation.svg') }}"
                            alt="img" /><span>
                            E-Commerce</span>
                        <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="productlist.html">Orders</a></li>
                    </ul>
                </li>
                <li class="submenu" id="product">
                    <a href="javascript:void(0);"><img src="{{ asset('template/img/icons/product.svg') }}"
                            alt="product" />
                        <span>Product</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul>
                        <li><a href="{{ route('admin.product.index') }}">Product List</a></li>
                        <li><a href="{{ route('admin.product.create') }}">Add Product</a></li>
                        <li><a href="{{ route('admin.category.index') }}">Category List</a></li>
                        <li><a href="{{ route('admin.category.create') }}">Add Category</a></li>
                        <li><a href="{{ route('admin.subcategory.index') }}">Sub Category List</a></li>
                        <li><a href="{{ route('admin.subcategory.create') }}">Add Sub Category</a></li>
                        <li><a href="{{ route('admin.brand.index') }}">Brand List</a></li>
                        <li><a href="{{ route('admin.brand.create') }}">Add Brand</a></li>
                        <li><a href="{{ route('admin.brandtype.index') }}">Brand Type List</a></li>
                        <li><a href="{{ route('admin.brandtype.create') }}">Add Brand Type</a></li>
                        <li><a href="#">Import Products</a></li>
                        <li><a href="#">Print Barcode</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="javascript:void(0);"><img src="{{ asset('template/img/icons/sales1.svg') }}"
                            alt="img" /><span>
                            Sales</span>
                        <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="saleslist.html">Sales List</a></li>
                        <li><a href="pos.html">POS</a></li>
                        <li><a href="pos.html">New Sales</a></li>
                        <li><a href="salesreturnlists.html">Sales Return List</a></li>
                        <li>
                            <a href="createsalesreturns.html">New Sales Return</a>
                        </li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="javascript:void(0);"><img src="{{ asset('template/img/icons/quotation1.svg') }}"
                            alt="img" /><span>
                            Supplier</span>
                        <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="{{ route('admin.supplier.index') }}">Supplier List</a></li>
                        <li><a href="{{ route('admin.supplier.create') }}">Add Supplier</a></li>
                        <li><a href="importpurchase.html">Import Supplier</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="javascript:void(0);"><img src="{{ asset('template/img/icons/purchase1.svg') }}"
                            alt="img" /><span>
                            Purchase</span>
                        <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="purchaselist.html">Purchase List</a></li>
                        <li><a href="addpurchase.html">Add Purchase</a></li>
                        <li><a href="importpurchase.html">Import Purchase</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="javascript:void(0);"><img src="{{ asset('template/img/icons/expense1.svg') }}"
                            alt="img" /><span>
                            Expense</span>
                        <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="expenselist.html">Expense List</a></li>
                        <li><a href="createexpense.html">Add Expense</a></li>
                        <li><a href="expensecategory.html">Expense Category</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="javascript:void(0);"><img src="{{ asset('template/img/icons/quotation1.svg') }}"
                            alt="img" /><span>
                            Quotation</span>
                        <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="quotationList.html">Quotation List</a></li>
                        <li><a href="addquotation.html">Add Quotation</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="javascript:void(0);"><img src="{{ asset('template/img/icons/transfer1.svg') }}"
                            alt="img" /><span>
                            Transfer</span>
                        <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="transferlist.html">Transfer List</a></li>
                        <li><a href="addtransfer.html">Add Transfer </a></li>
                        <li><a href="importtransfer.html">Import Transfer </a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="javascript:void(0);"><img src="{{ asset('template/img/icons/return1.svg') }}"
                            alt="img" /><span>
                            Return</span>
                        <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="salesreturnlist.html">Sales Return List</a></li>
                        <li>
                            <a href="createsalesreturn.html">Add Sales Return </a>
                        </li>
                        <li>
                            <a href="purchasereturnlist.html">Purchase Return List</a>
                        </li>
                        <li>
                            <a href="createpurchasereturn.html">Add Purchase Return </a>
                        </li>
                    </ul>
                </li>
                <li class="submenu" id="people">
                    <a href="javascript:void(0);"><img src="{{ asset('template/img/icons/users1.svg') }}"
                            alt="img" /><span>
                            People</span>
                        <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="customerlist.html">Customer List</a></li>
                        <li><a href="addcustomer.html">Add Customer </a></li>
                        <li><a href="supplierlist.html">Supplier List</a></li>
                        <li><a href="addsupplier.html">Add Supplier </a></li>
                        <li><a href="{{ route('admin.user.index') }}">Users List</a></li>
                        <li><a href="{{ route('admin.user.create') }}">Add User </a></li>
                        <li><a href="storelist.html">Store List</a></li>
                        <li><a href="addstore.html">Add Store</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="javascript:void(0);"><img src="{{ asset('template/img/icons/time.svg') }}"
                            alt="img" /><span>
                            Report</span>
                        <span class="menu-arrow"></span></a>
                    <ul>
                        <li>
                            <a href="purchaseorderreport.html">Purchase order report</a>
                        </li>
                        <li><a href="inventoryreport.html">Inventory Report</a></li>
                        <li><a href="salesreport.html">Sales Report</a></li>
                        <li><a href="invoicereport.html">Invoice Report</a></li>
                        <li><a href="purchasereport.html">Purchase Report</a></li>
                        <li><a href="supplierreport.html">Supplier Report</a></li>
                        <li><a href="customerreport.html">Customer Report</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="javascript:void(0);"><img src="{{ asset('template/img/icons/settings.svg') }}"
                            alt="img" /><span>
                            Settings</span>
                        <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="generalsettings.html">General Settings</a></li>
                        <li><a href="emailsettings.html">Email Settings</a></li>
                        <li><a href="paymentsettings.html">Payment Settings</a></li>
                        <li><a href="currencysettings.html">Currency Settings</a></li>
                        <li><a href="grouppermissions.html">Group Permissions</a></li>
                        <li><a href="taxrates.html">Tax Rates</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
