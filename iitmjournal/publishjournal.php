<?php include("header.php"); ?>
<?php include("sidenav.php"); ?>

   <div class="container mt-10">
    <div class="row ">
    <div class="col-xs-6 col-sm-7"> 
      <div class="col-md-9 " style="margin-left: 50px;">
        <div class="container fix">
         <div class="row justify-content-center">
            <div class="col-md-10">
                        <div class="card" >
                <div class="card-body">
                    <h5 class="card-title">Uploaded</h5>
                  <div class="table-responsive" ng-controller="pj">
                    <div ng-repeat="j in journals">
                      <p>{{j.id}}</p>
                      <p>{{j.Title}}</p>
                      <p>{{j.category}}</p>
                      <p>{{j.Date}}</p>
                      <a href="/userpdf/{{j.link}}">View</a>
                    </div>
                    <table class="table table-hover" id="table1">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Author Name</th>
                                <th>Category</th>
                                <th>Date</th>
                                <th>File</th>
                                
                                
                                <th>Delete</th>
                                
                                <th>Publish</th>
                            </tr>
                        </thead>
                        <tbody>
                             
                                <tr>
                                    <td>National Conference on Emerging Trends in Information TechnologyAdvances in High Performance Computing, Data Sciences &amp; Cyber Security</td>
                                    <td>Admin</td>
                                    <td>IT</td>
                                    <td>25-01-2017</td>
                                    <td>
                                    <a class="btn btn-primary" href='#'>View</a>
                                    </td>
                                    <td>
                                        <form method="POST" action="#">
                                            <input name="_method" type="hidden" value="DELETE">
                                        <input class="btn btn-danger" type="submit" value="Delete">
                                        </form>
                                    </td>
                                    <td><a class="btn btn-success" href="#">Publish</a></td>
                                </tr>
                             </tbody>
                         </table>
                        </div>
                       </div>
                     </div>
                   </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
  </div>
<?php
  include("footer.php");
?>
