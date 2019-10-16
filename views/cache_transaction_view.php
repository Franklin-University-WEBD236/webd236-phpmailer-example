%% views/header.html %%

<div class="row">
  <div class="col-lg-12">
    <p>${{ abs($transaction['amount'])}} was sent on: {{$transaction['date']}}</p>
  </div>
</div>

<div class="row">
  <div class="col-lg-12">
    <p>From: {{ $transaction['sender']}} => To: {{ $transaction['receiver']}}</p>
  </div>
</div>

<div class="row">
  <div class="col-lg-12">
    <h4>{{ $transaction['subject']}}</h4>
  </div>
</div>

<div class="row">
  <div class="col-lg-12">
      {{{{ $transaction['message'] }}}}
  </div>
</div>
    
<div class="row mt-4">
  <div class="col-lg-12">
    <div class="form-group">
      <div class="btn-toolbar align-middle">
        <button class="btn btn-secondary mr-1 d-flex justify-content-center align-content-between" onclick="return get('/index')"><span class="material-icons">arrow_back</span>&nbsp;Back</button>
      </div>
    </div>
  </div>
</div>
%% views/footer.html %%
