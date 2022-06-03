<div class="page-header text-center" style="background-image: url('assets/images/page-header-bg.jpg')">
    <div class="container">
        <h1 class="page-title">
        {{ 'Still working on my shop<span>soon ...</span></h1>' }}
    </div>
</div>
<div class="page-wrapper">
    <!-- header here -->
    <main class="main">
<!-- main header here 
    	<div class="page-header text-center" style="background-image: url('assets/images/page-header-bg.jpg')">
        		<div class="container">
        			<h1 class="page-title">List<span>Shop</span></h1>
        		</div>
                </div>
-->
        <nav aria-label="breadcrumb" class="breadcrumb-nav mb-2">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Shop</a></li>
                    <li class="breadcrumb-item"><a href="#">No Sidebar</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Boxed</li>
                </ol>
            </div>
        </nav>
        <div class="page-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="toolbox">
                            <div class="toolbox-left">
                                <div class="toolbox-info">
                                    Showing <span>12 of 56</span> Products
                                </div>
                            </div>

                            <div class="toolbox-right">
                                <div class="toolbox-sort">
                                    <label for="sortby">Sort by:</label>
                                    <div class="select-custom">
                                        <select name="sortby" id="sortby" class="form-control">
                                            <option value="popularity" selected="selected">Most Popular</option>
                                            <option value="rating">Most Rated</option>
                                            <option value="date">Date</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <!-- products -->
                        <div class="products mb-3 items" >
                            <div class="row justify-content-center" id="items"></div>
                        </div>

                         <!-- pagination -->
                        <nav aria-label='Page navigation'>
                            <ul class='pagination justify-content-center'>
                                <li class='page-item disabled'>
                                    <a class='page-link page-link-prev' href='#' aria-label='Previous' tabindex='-1' aria-disabled='true'>
                                        <span aria-hidden='true'><i class='icon-long-arrow-left'></i></span>Prev
                                    </a>
                                </li>
                                <li class='page-item active' aria-current='page'><a class='page-link' href='#'>1</a></li>
                                <li class='page-item'><a class='page-link' href='#'>2</a></li>
                                <li class='page-item'><a class='page-link' href='#'>3</a></li>
                                <li class='page-item-total'>of 6</li>
                                <li class='page-item'>
                                    <a class='page-link page-link-next' href='#' aria-label='Next'>
                                        Next <span aria-hidden='true'><i class='icon-long-arrow-right'></i></span>
                                    </a>
                                </li>
                            </ul>
						</nav>

                    </div>
                        
                    <aside class="col-lg-3 order-lg-first">
                        <div class="sidebar sidebar-shop" id="filters">
                            <!-- filters-->
                        </div>
                    </aside>
                </div>  
            </div>
        </div>
    </main>
</div>
