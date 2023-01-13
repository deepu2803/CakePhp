
<table id="tbl-users-list" class="table table-bordered table-striped">
<thead>
    <tr>
          <td colspan="5" align="right"><a href="<?= $this->
             Url->build('User/user/', ['fullBase' => true]) ?>">
                        Add User</a></td>
     </tr>
    <tr>
        <th>ID</th>
        <th>FirstName</th>
        <th>Phone No</th>
        <th>Email</th>
        <th>Action</th>
    </tr>
</thead>
<tbody>
      <?php
        if (count($row) > 0) {
            foreach ($row as $index => $data) {
        ?>
              <tr>
                  <td><?= $data['id'] ?></td>
                  <td><?= $data['first_name'] ?></td>
                  <td><?= $data['contact'] ?></td>
                <td><?= $data['email'] ?></td>
                  
                  <td>
                    
       <a href="<?= $this->Url->build('User/edit?id=' . $data['id'], 
       ['fullBase' => true]) ?>" class="btn btn-warning">Edit</a>
                              
       <a href="<?= $this->Url->build('User/delete?id=' . $data['id'], 
       ['fullBase' => true]) ?>" class="btn btn-warning">Delete</a>
                    </td>
              </tr>
      <?php
            }
        }
        ?>
  </tbody>
</table>
