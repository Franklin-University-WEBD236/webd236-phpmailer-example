%% views/header.html %%
      

<div class="row">
  <div class="col-lg-12">

    <form action="/transaction/{{$operation}}" method="post">
      <div class="form-group">
        <label for="amount">Amount</label>
        <input type="number" min="1" id="amount" name="amount" class="form-control" placeholder="How much do you want to send?" value="{{$transaction['amount']}}" />
      </div>
      <div class="form-group">
        <label for="title">Subject</label>
        <input type="text" min="1" id="subject" name="subject" class="form-control" placeholder="Why are you sending money?" value="{{$transaction['subject']}}" />
      </div>
      <div class="form-group">
        <label for="content">Message</label>
        <textarea class="form-control" id="message" name="message" placeholder="Say thank you, or some other note." rows="12">{{$transaction['message']}}</textarea>
      </div>
      <div class="form-group">
        <label for="tags">From</label>
        <input type="text" min="1" id="sender" name="sender" class="form-control" placeholder="Enter email from" value="{{$transaction['sender']}}" />
      </div>
      <div class="form-group">
        <label for="tags">To</label>
        <input type="text" min="1" id="receiver" name="receiver" class="form-control" placeholder="Enter email to" value="{{$transaction['receiver']}}" />
      </div>
      <div class="form-group">
        <div class="btn-toolbar align-middle">
          <button type="submit" class="btn btn-primary mr-1 d-flex justify-content-center align-content-between"><span class="material-icons">send</span>&nbsp;Send</button>
          <button class="btn btn-secondary mr-1 d-flex justify-content-center align-content-between" onclick="get('/index')"><span class="material-icons">cancel</span>&nbsp;Cancel</button>
        </div>
      </div>
      <input type="hidden" id="date" name="date" value="{{$transaction['date']}}" />
    </form>
  </div>
</div>

%% views/footer.html %% 
