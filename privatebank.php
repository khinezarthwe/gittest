<html ng-app="">
<head>
  <title>This is for FIS</title>
   
   <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
   <link href="css/me.css" rel="stylesheet" media="screen">
   <script src="js/bootstrap.js"></script>
   <script src="js/dropdown.js"></script>
   <script src="js/jqurey.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/angular.min.js"></script>
    <script type="text/javascript">
      $(document).ready (function(){
        $('h1').css('color','#eeefff');
      });
    </script>

</head>
<body data-ng-init="names=[{id: 1, name: 'Myanmar Citizin Bank', number: '11'},
    {id: 2, name: 'First Private Bank', number: '21'},
    {id: 3, name: 'Cooperative Bank', number: '60'},
    {id: 4, name: 'Yadanarbone Bank', number: '2'},
    {id: 5, name: 'Myawaddy Bank', number: '29'},
    {id: 6, name: 'Yangon City Bank', number: '2'},
    {id: 7, name: 'Yoma Bank', number: '53'},
    {id: 8, name: 'Myanmar Oriental Bank', number: '23'},
    {id: 9, name: 'Asia Yangon Bank', number: '9'},
    {id: 10, name: 'Tun Foundation Bank', number: '14'},
    {id: 11, name: 'Kanbaza Bank', number: '128'},
    {id: 12, name: 'Rural Development Bank', number: '2'},
    {id: 13, name: 'Small Medium Industry Development Bank', number: '11'},
    {id: 14, name: 'Myanmar Livestock and Fisheries Development Bank', number: '72'},
    {id: 15, name: 'Asia Green Development Bank', number: '23'},
    {id: 16, name: 'Ayeyarwady Bank', number: '47'},
    {id: 17, name: 'United Amara Bank', number: '20'},
    {id: 18, name: 'Myanmar Apex Bank', number: '29'},
    {id: 19, name: 'Innwa Bank', number: '33'},
    {id: 20, name: 'NayPyiTaw SIBIN Bank', number: '1'}

    ]">
 
<div class="container">
  <div class="row">
    <div class="col-md-2">
      <img src="img/japan.jpg" alt="no image" class="img-circle" style="width: 180px; height: 200px;padding-left: 5px;">
          </div>
          <div class="col-md-10"> 
          <div class="jumbotron">
            <h2>Web Professional Advance -9</h2>
            <p>Angular JS Homework</p>
          </div>
          </div>
      
  </div>

    <ul class="nav nav-justified">
          <li><a href="angular.php">Home</a></li>
          <li><a href="privatebank.php">Private Banks</a></li>
          <li><a href="#">State Owned Banks</a></li>
          <li><a href="#">Daily</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
  </div>
<div class="row">
  <div class="col-md-2">
  </div>
  <div class="col-md-10">
    <br/>
Search:
<br/>
<input type="text" data-ng-model="test" />{{test}}
<br/>
<br/>
<br/>
<br/>

<table>
    <tr>
      <th>No  :    </th>
      <th>Name Of Banks</th>
      <th>Number of Bank</th>
    </tr>
    <tr ng-repeat="bName in names | filter:test">
      <td>{{ bName.id }}</td>
      <td>{{ bName.name }}</td>
      <td>{{ bName.number }}</td>
    </tr>
  </table>
</div>
</div>
</body>
</html>