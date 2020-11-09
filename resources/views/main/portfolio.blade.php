<div>
    <div class="page-title-area">
        <div class="bg-text">
            
            <span>Sky<br>Level<br>Concepts<br></span>
        </div>
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="title-item">
                        <h2>Portfolio</h2>
                        <ul>
                            <li>
                                <a href="{{url('/')}}">Home</a>
                            </li>
                            <li>
                                <span>Portfolio</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Title -->

    <!-- Portfolio -->
    <div class="portfolio-area two ptb-100">
        <div class="container">
            <div class="row">
@foreach($portfolios as $key => $port)
     <div class="col-sm-6 col-lg-4">
                    <div class="portfolio-item">
                        <img src="{{$port->image}}" alt="{{$port->name}}">
                        <div class="portfolio-inner">
                            <span><a href="{{$port->link}}">{{$port->name}}</a></span>
                            <h3>
                                <a href="{{$port->link}}">{{$port->description}}</a>
                            </h3>
                        </div>
                    </div>
                </div>
@endforeach
               

            </div>

            {{$portfolios->links('admin.components.pagination',['prev'=>'Prev','next'=>'Next'])}}
        </div>
    </div>
</div>
