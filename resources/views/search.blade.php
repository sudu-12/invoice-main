<html>
    <head>

    </head>
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<style>
* {
  box-sizing: border-box;
}

body {
  background-color: #f1f1f1;
}

#regForm {
  background-color: #ffffff;
  margin: 100px auto;
  font-family: Raleway;
  padding: 40px;
  width: 70%;
  min-width: 300px;
}

h1 {
  text-align: center;  
}

input {
  height: 25px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
}

input.invalid {
  background-color: #ffdddd;
}

.tab {
  display: none;
}

button {
  height: 25px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
}

button:hover {
  opacity: 0.8;
}

#prevBtn {
  background-color: #bbbbbb;
}

.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;  
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

.step.active {
  opacity: 1;
}

.step.finish {
  background-color: #04AA6D;
}
</style>    
    <body>
        <div id="regForm">
        Pending for invoicing
        <table>
            <tr>
                <td>Customer</td>
                <td><input oninput="this.className = ''" name="cust"></td>
                <td>Pl No</td>
                <td><input oninput="this.className = ''" name="plno"></td>
                <td><button>Refresh</button></td>
                <td><button>Exit</button></td>
            </tr>
        </table>
        <table>
            <tr>
                <th>PLNo</th>
                <th>PL Date</th>
                <th>Customer</th>
                <th>PONo</th>
                <th>AWBNo</th>
            </tr>
            <tbody>
                @if(count($p)>0)
                @foreach($p as $p1)
                <tr>
                    <td>{{$p1->PLNo}}</td>
                    <td></td>
                    <td>{{$p1->ConsigneeID}}</td>
                    <td>{{$p1->CusPONo}}</td>
                    <td>AWBNo</td>
                </tr>
                @endforeach
                @else
                <tr>
                    <td colspan="4"><h3 style="text-transform:capitalize; color:black;text-align: center;">No Available Times Found</h3></td>
                </tr>
                @endif
            </tbody>
        </table>
        </div>
    </body>
</html>