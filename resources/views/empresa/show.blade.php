@extends('layouts.app')

@section('content')
<?php 
$pruebaCadena = json_encode($respuesta["cadena"]); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            @include('inc.messages')
            <div class="panel panel-default">                
                <div class="panel-heading">
                	Empresa<a href="/" style="float:right;">Volver</a>
                </div>
                <div class="panel-body">                    
                  <div class="well">
        						<div class="row">
        							<div class="col-md-4 col-sm-4">
        								<img style="width:150px" src="/storage/images/{{$empresa->imagen}}">
        							</div>
        							<div class="col-md-4 col-sm-4">
        								<h3><a href="#">{{$empresa->nombre}}</a></h3>
        							<small>Creada el {{$empresa->created_at->toDateString()}}</small>
        							</div>
                      <div class="col-md-4 col-sm-4">
                        <a href="/empresa/{{$empresa->id}}/edit"
                                       class="btn btn-warning">
                                        <i class="fa fa-edit"></i> Editar
                                    </a>                    
                      </div>
        						</div>
        						
        					</div>
                </div>
                <ul class="list-inline" align="center">
        				  <li><a href="/empresa/{{$empresa->id}}/proveedor" class="list-group-item">Proveedor</a></li>
        				  <li><a href="/empresa/{{$empresa->id}}/consumidor" class="list-group-item">Consumidor</a></li>
        				</ul>
                <ul class="list-inline" align="center">
                  <li><a href="/empresa/{{$empresa->id}}/proceso" class="list-group-item">Proceso</a></li>
                  <li><a href="/empresa/{{$empresa->id}}/subproceso" class="list-group-item">Subproceso</a></li>
                </ul>
                <ul class="list-inline" align="center">
                  
                  <li><a href="/empresa/{{$empresa->id}}/uNegocio" class="list-group-item">Unidad de Negocio</a></li>
                
                </ul>

				
                {{--<div class="panel-heading">--}}
                	{{--Cadena de Sumistros--}}
                	{{--<a href="/pdf/cadena/{{$empresa->id}}" class="btn btn-default" style="float:right; margin-right:10px">Exportar PDF</a>--}}
                {{--</div>--}}
                {{--<div class="panel-body">--}}
                	{{--<div id="myDiagramDiv" style="width:100%; height:400px; border:1px solid black;"></div>--}}
                {{--</div>--}}


                
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="https://gojs.net/latest/release/go.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<script type="text/javascript">
function init() {
    // init for these samples -- you don't need to call this
    var $ = go.GraphObject.make;  // for conciseness in defining templates in this function

    myDiagram =
      $(go.Diagram, "myDiagramDiv",  // must be the ID or reference to div
        { initialContentAlignment: go.Spot.Center });

    // define all of the gradient brushes
    var graygrad = $(go.Brush, "Linear", { 0: "#F5F5F5", 1: "#F1F1F1" });
    var bluegrad = $(go.Brush, "Linear", { 0: "#CDDAF0", 1: "#91ADDD" });
    var yellowgrad = $(go.Brush, "Linear", { 0: "#FEC901", 1: "#FEA200" });
    var lavgrad = $(go.Brush, "Linear", { 0: "#EF9EFA", 1: "#A570AD" });

    // define the Node template for non-terminal nodes
    myDiagram.nodeTemplate =
      $(go.Node, "Auto",
        { isShadowed: true },
        // define the node's outer shape
        $(go.Shape, "RoundedRectangle",
          { fill: graygrad, stroke: "#D8D8D8" },
          new go.Binding("fill", "color")),
        $(go.Picture,
      { margin: 0, width: 50, height: 50, background: "white" },
      new go.Binding("source")),
        // define the node's text
        $(go.TextBlock,
          { margin: 5, font: "bold 8px Helvetica, bold Arial, sans-serif" },
          new go.Binding("text", "name"))
      );
    // define the Link template
    myDiagram.linkTemplate =
      $(go.Link,  // the whole link panel
        { selectable: false },
        $(go.Shape));  // the link shape
    // create the model for the double tree
    myDiagram.model = new go.TreeModel([
        // these node data are indented but not nested according to the depth in the tree
        { key: "Root", color: lavgrad ,name:"empresa"},
          { key: "Left1", parent: "Root", dir: "left", color: bluegrad  },
          { key: "Left24", parent: "Root", dir: "left", color: bluegrad  },
            { key: "leaf1", parent: "Left1", name:"hola", source:"http://localhost:8000/tais/public/storage/images//noimage.jpg" },
            { key: "leaf2", parent: "Left1" },
            { key: "Left2", parent: "Left1", color: bluegrad },
              { key: "leaf3", parent: "Left2" },
              { key: "leaf4", parent: "Left2" },
          { key: "Right1", parent: "Root", dir: "right", color: yellowgrad },
            { key: "Right2", parent: "Right1", color: yellowgrad },
              { key: "leaf5", parent: "Right2" },
              { key: "leaf6", parent: "Right2" },
              { key: "leaf7", parent: "Right2" },
            { key: "leaf8", parent: "Right1" },
            { key: "leaf9", parent: "Right1" }
      ]);
    var prueba=new Array();
     var prueba=<?php echo $pruebaCadena;?>;

     console.log(prueba);
     myDiagram.model = new go.TreeModel(prueba);
    doubleTreeLayout(myDiagram);
  }

  function doubleTreeLayout(diagram) {
    // Within this function override the definition of '$' from jQuery:
    var $ = go.GraphObject.make;  // for conciseness in defining templates
    diagram.startTransaction("Double Tree Layout");
    // split the nodes and links into two Sets, depending on direction
    var leftParts = new go.Set(go.Part);
    var rightParts = new go.Set(go.Part);
    separatePartsByLayout(diagram, leftParts, rightParts);
    // but the ROOT node will be in both collections

    // create and perform two TreeLayouts, one in each direction,
    // without moving the ROOT node, on the different subsets of nodes and links
    var layout1 =
      $(go.TreeLayout,
        { angle: 180,
          arrangement: go.TreeLayout.ArrangementFixedRoots,
          setsPortSpot: false });

    var layout2 =
      $(go.TreeLayout,
        { angle: 0,
          arrangement: go.TreeLayout.ArrangementFixedRoots,
          setsPortSpot: false });

    layout1.doLayout(leftParts);
    layout2.doLayout(rightParts);

    diagram.commitTransaction("Double Tree Layout");
  }

  function separatePartsByLayout(diagram, leftParts, rightParts) {
    var root = diagram.findNodeForKey("Root");
    if (root === null) return;
    // the ROOT node is shared by both subtrees!
    leftParts.add(root);
    rightParts.add(root);
    // look at all of the immediate children of the ROOT node
    root.findTreeChildrenNodes().each(function(child) {
        // in what direction is this child growing?
        var dir = child.data.dir;
        var coll = (dir === "left") ? leftParts : rightParts;
        // add the whole subtree starting with this child node
        coll.addAll(child.findTreeParts());
        // and also add the link from the ROOT node to this child node
        coll.add(child.findTreeParentLink());
      });
  }
  </script>
  <script>
  $(document).ready(function(){
    init();
  });
</script>
@endsection

