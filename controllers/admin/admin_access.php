<div class="tab-content">
  <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="tab-login">
    <form>
      <div class="text-center mb-3">
        <p>CHANGE ADMIN USER ACCESS LEVEL</p>
      </div>
      <!-- Name input -->
      <div class="form-outline mb-4">
        <input type="text" id="adminFirstName" class="form-control" placeholder="First Name"/>
      </div>

      <div class="form-outline mb-4">
        <input type="text" id="adminLastName" class="form-control" placeholder="Last Name"/>
      </div>

      <!-- Username input -->
      <div class="form-outline mb-4">
        <input type="text" id="adminUsername" class="form-control" placeholder="Username"/>
      </div>

      <!-- Email input -->
      <div class="form-outline mb-4">
        <input type="email" id="adminEmail" class="form-control" placeholder="Email"/>
      </div>

      <!-- Position -->
      <div class="form-outline mb-4">
          <select id="accesslevel" name="Position">
            <option selected disabled>Access Level</option>
            <option value="Agent">Agent</option>
            <option value="Supervisor">Supervisor</option>
            <option value="System Admin">System Admin</option>
          </select>
      </div>

      <!-- Submit button -->
    </form>
    <button type="submit" class="btn btn-info btn-block mb-4" onclick="changeaccess()">Change Access</button>
  </div>
 
</div>