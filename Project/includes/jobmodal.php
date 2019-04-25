<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Job Description</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="" class="form-group">
            <div>
               <label for="company-name">Company Name</label>
                <input type="text" class="form-control" name="company-name" required>
            </div>
            <div>
               <label for="job-context">Job Context</label>
                <textarea name="job-context" id="job-context" class="col-md-12 col-sm-12" rows="5" required></textarea>
            </div>
            <div>
               <label for="job-responsibilities">Job Responsibilites</label>
                <textarea name="job-responsibilities" class="job-res col-md-12 col-sm-12" rows="10" required></textarea>
            </div>
            <div>
               <label for="emp-stat">Employment Status</label>
               <input type="radio" name="emp-stat"> <label class="emp-stat-txt" for="">Full Time</label><br>
               <input type="radio" name="emp-stat"> <label class="emp-stat-txt" for="">Part Time</label><br>
               <input type="radio" name="emp-stat"> <label class="emp-stat-txt" for="">Internship</label>
            
            </div>
            
            
            <div>
                <label for="education-req">Educational Requirements</label>
                <textarea name="education-req" class="job-res col-md-12 col-sm-12" rows="10" required></textarea>
            </div>
            
            <div>
                <label for="additonal-req">Additional Requirements</label>
                <textarea name="additioal-req" class="job-res col-md-12 col-sm-12" rows="10" required></textarea>
            </div>
            
            <div>
                <label for="company-add">Company Address</label>
                <textarea name="company-add" class="job-res col-md-12 col-sm-12" rows="5" required></textarea>
            </div>
            
            
            
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success">Post Job</button>
      </div>
    </div>
  </div>
</div>
