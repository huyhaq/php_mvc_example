<!-- -------- END HEADER 7 w/ text and video ------- -->
  <div class="card card-body shadow-xl mx-3 mx-md-4 mt-n6">
    <!-- Section with four info areas left & one card right with image and waves -->
    <section class="py-7">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-12">
            <div class="row justify-content-start">
            <div class="card">
  <div class="table-responsive">
    <table class="table align-items-center mb-0">
      <thead>
        <tr>
          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Id</th>
          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Name</th>
          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Quantity</th>
          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
          <th class="text-secondary opacity-7"></th>
        </tr>
      </thead>
      <tbody>
        @foreach($carts as $item)
        <tr>
          <td>
            {{$item['id']}}
          </td>
          <td>
          {{$item['name']}}
          </td>
          <td class="align-middle text-center text-sm">
          {{$item['quantity']}}
          </td>
          <td class="align-middle text-center">
        
          <a type="button" class="btn btn-danger">Delete</a>
            <a type="button" class="btn btn-warning">Increment</a>
            <a type="button" class="btn btn-warning">DeIncrement</a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
            </div>
          
          </div>
        </div>
      </div>
    </section>
  </div>