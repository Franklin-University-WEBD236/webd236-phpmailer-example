%% views/header.html %%

<div class="row">
  <div class="col-lg-12">
    <span class='h4'>Transactions</span> <span class='float-right h3'>Balance: ${{{$balance}}}</span></span>
    [[ if (isset($transactions)): ]]
    <div class="row">
      <div class="col-lg-12">
    [[ foreach ($transactions as $transaction): ]]
        <div class="col-transaction">
        <p><b>Price : </b> ${{{$transaction['amount']}}} <b>Date : </b> {{{$transaction['date']}}}
          <br><b>{{{$transaction['subject']}}} : </b> {{{$transaction['message']}}}
          <br><b>From : </b> {{{$transaction['sender']}}}
          <b>To : </b> {{{$transaction['receiver']}}}</p>
          <a href="@@transaction/view/{{{$transaction['id']}}}@@"><button class="btn btn-primary mr-1 d-flex justify-content-center align-content-between" ><span class="material-icons">add_circle_outline</span>&nbsp;View</button></a>
          <a href="@@transaction/delete/{{{$transaction['id']}}}@@"><button class="btn btn-primary mr-1 d-flex justify-content-center align-content-between" ><span class="material-icons">add_circle_outline</span>&nbsp;Delete</button></a>

        </div>
    [[ endforeach; ]]
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