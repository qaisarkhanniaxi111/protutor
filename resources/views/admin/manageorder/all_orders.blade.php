@include('admin/common/header')

<div class="dashboard-wrap">

 @include('admin/common/sidebar')

 <div class="main-wrapper">

  <div class="search-bar">
    <div class="inp-outer mt-0">
      <div class="inp-in icon-left">
        <input id="sarch-expand" class="input input-dark" type="text" placeholder="Search Users by Name, Email or Date">
        <span class="inp-icon"><i class="fa-solid fa-magnifying-glass"></i></span>
      </div>
    </div>
    <div class="search-bar-group">
      <form action="{{url('admin/all_orders')}}" method="get">
        <div class="row">
          <div class="col-sm-6 col-lg-3">
            <div class="inp-outer">
              <label for="">Name</label>
              <input class="input" type="text" placeholder="" name="name" value="<?php echo (isset($_GET['name']) ? $_GET['name'] : ""); ?>">
            </div>
          </div>
          <div class="col-sm-6 col-lg-3">
            <div class="inp-outer">
              <label for="">Order Type</label>
              <select class="input" name="order_type">
                <option value="">Select</option>
                <option value="lesson" <?php echo ((isset($_GET['order_type']) && $_GET['order_type'] == 'lesson') ? "selected" : ""); ?>>Lesson</option>

                <!-- <option value="Subscription" <?php //echo ((isset($_GET['order_type']) && $_GET['order_type'] == 'Subscription') ? "selected" : ""); ?>>Subscription</option>
                <option value="Classes" <?php //echo ((isset($_GET['order_type']) && $_GET['order_type'] == 'Classes') ? "selected" : ""); ?>>Classes</option>
                <option value="Package" <?php //echo ((isset($_GET['order_type']) && $_GET['order_type'] == 'Package') ? "selected" : ""); ?>>Package</option>
                <option value="Wallet" <?php //echo ((isset($_GET['order_type']) && $_GET['order_type'] == 'Wallet') ? "selected" : ""); ?>>Wallet</option> -->
              </select>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3">
            <div class="inp-outer">
              <label for="">Status</label>
              <select class="input" name="status" >
                <option value="">Select</option>
                <option value="1" <?php echo ((isset($_GET['status']) && $_GET['status'] == 1) ? "selected" : ""); ?> >In Process</option>
                <option value="2" <?php echo ((isset($_GET['status']) && $_GET['status'] == 2) ? "selected" : ""); ?> >Completed</option>
                <option value="3" <?php echo ((isset($_GET['status']) && $_GET['status'] == 3) ? "selected" : ""); ?> >Cancelled</option>

              </select>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3">
            <div class="inp-outer">
              <label for="">Reg Date From</label>
              <div class="inp-in">
                <input class="input" type="date" placeholder="" name="register_from" value="<?php echo (isset($_GET['register_from']) ? $_GET['register_from'] : ""); ?>">
                <span class="inp-icon"><i class="fa-solid fa-calendar-days"></i></span>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3">
            <div class="inp-outer">
              <label for="">Reg Date To</label>
              <div class="inp-in">
                <input class="input" type="date" placeholder="" name="register_to" value="<?php echo (isset($_GET['register_to']) ? $_GET['register_to'] : ""); ?>">
                <span class="inp-icon"><i class="fa-solid fa-calendar-days"></i></span>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="inp-outer">
              <label class="blank" for="">&nbsp;</label>
              <button class="site-link sm">Search</button>
              <button class="site-link bdr sm">Clear</button>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
  <div class="table-wrap">
    <span style="color: red;">
      @if(session('success_msg'))  
      <div class="alert alert-success alert-dismissible"> 
        {{session('success_msg')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert"><span aria-hidden="true">&times;</span>
        </button>
      </div>
      @elseif(session('error_msg'))
      <div class="alert alert-danger alert-dismissible"> 
        {{session('error_msg')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert"><span aria-hidden="true">&times;</span>
        </button>
      </div>
      @endif 
    </span>
    <div class="table-responsive">
      <table class="table theme-table">
        <thead>
          <tr>
            <th>ORDER ID</th>
            <th>USER NAME</th>
            <th>ORDER TYPE</th>
            <th>ITEMS</th>
            <th>TOTAL</th>
            <th>DISCOUNT</th>
            <th>NET TOTAL</th>
            <th>PAYMENT</th>
            <th>STATUS</th>
            <th>DATE</th>
            <th class="text-center">ACTIONS</th>
          </tr>
        </thead>

        <tbody>

          <?php if(isset($All_lesson) && !empty($All_lesson)){ ?> 
            @foreach($All_lesson as $data) 
            <tr>
              <td>{{$data->id}}</td>
              <td>{{$data->name}}</td>
              <td>{{$data->order_type}}</td>
              <td>{{$data->items}}</td>
              <td>{{$data->total}}</td>
              <td>{{$data->discount}}</td>
              <td>{{$data->net_total}}</td>
              <td>{{$data->payment_status}}</td>
              <td>
                <?php 

                if(isset($data->status) && $data->status == 1){
                  echo "IN Process"; 
                }

                if(isset($data->status) && $data->status == 2){
                  echo "Completed"; 
                }

                if(isset($data->status) && $data->status == 3){
                  echo "Cancelled"; 
                }
                
                ?>
                
              </td>
              <td>
                @php
                echo date('M, jS Y h:i:s A',strtotime($data->created_at));
                @endphp
              </td>
              <td class="text-center">
                <div class="profile-dropdown">
                  <div class="dropdown">
                    <div class="dropdown-toggle" data-bs-toggle="dropdown">
                      <i class="fa-solid fa-ellipsis-vertical"></i>
                    </div>
                    <ul class="dropdown-menu">
                      <li><a class="" href="order-details.html">View</a></li>
                      <li><a class="" href="view-profile.html">View Profile</a></li>
                      <li><a class="" href="view-profile.html">Transactions</a></li>
                    </ul>
                  </div>
                </div>
              </td>
            </tr>
            @endforeach
            <?php 
          }
          if(count($All_lesson) =="0"){
            echo "<tr><td>";
            echo "<h4>Record not found</h4>";
            echo "</td></tr>";
          }
          ?>

        </tbody>

        <tfoot>
          <tr>
            <th colspan="12">   
              <?php 
              /*echo $All_lesson->appends($params)->render("pagination::bootstrap-4")  ;*/
              ?> 
            </th> 
          </tr>
        </tfoot>
      </table>
    </div>
  </div>

</div>
</div>

</div>  

@include('admin/common/footer')
