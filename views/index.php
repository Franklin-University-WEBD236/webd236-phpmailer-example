%% views/header.html %%

<div class="row">
  <div class="col-lg-12">
    <span class='h4'>Transactions</span> <span class='float-right h3'>Balance: $0.00</span></span>

    [[ if (isset($transactions)): ]]
    <div class="row">
      <div class="col-lg-12">
          <ul class="mb-0">
    [[ foreach ($transactions as $transaction): ]]
            <li>{{$transaction}}</li>
    [[ endforeach; ]]
          </ul>
      </div>
    </div>
    [[ endif;]]
  </div>
</div>

<div class="row mt-4">
  <div class="col-lg-12">
  <a href="@@transaction/send@@"><button class="btn btn-primary mr-1 d-flex justify-content-center align-content-between" ><span class="material-icons">add_circle_outline</span>&nbsp;Send Money</button></a>
  </div>
</div>
          
%% views/footer.html %% 