<?php
use backend\assets\DatatableAsset;
DatatableAsset::register($this);

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Kategori';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="box box-default color-palette-box">
<div class="box-header with-border"></div>
	<div class="box-body">
		<div class="mahasiswa-index">
			<?= Html::a('Create', ['/kategori/create'], ['class'=>'btn btn-primary']) ?>
			<br>
			<br>
			<table id="table-data"  cellpadding="0" cellspacing="0" border="0" class="table table-bordered table-condesed table-hover" width="100%">
				<thead>
					<tr style="background-color: #3598DC;">
						<th style="color:#FFFFFF;">No</th>
						<th style="color:#FFFFFF;">Name</th>
						<th style="color:#FFFFFF;">Title</th>
						<th style="color:#FFFFFF;">Phone</th>
						<th style="color:#FFFFFF;">Email</th>
						<th style="color:#FFFFFF;">Action</th>
					</tr>
				</thead>
			</table>
		</div>
	</div>
</div>
<script>
    var dataTable = $('#table-data').DataTable( {
                    "processing": true, 
                    "ordering": true,
                    "serverSide": true,
                    "bFilter": true,
                    "ajax":{
                        url :"<?php echo Yii::$app->request->baseUrl; ?>/index.php?r=footer/search", // json datasource
                        //type: "post",  // method  , by default getElementsByTagName('')
                    },
                    "scrollY":"350px", //scroll table
                    "scrollCollapse": true,
                     "columns": 
                        [
                           {"data": "no"},
                           { "data": "name" },
                           { "data": "title" },         
							 { "data": "phone" }, 
							  { "data": "email" }, 
						   { "data": "btn" }
                        ],
                    "columnDefs": 
                    [
                        {
                            'targets': [ 0, 1, 2 ],
                            'className': 'mdl-data-table__cell--non-numeric',
                            
                        },
                       
                        {
                           "searchable": false, // disable searching column 
                            "targets": [0,3],
                            "orderable": false
                        },
                        { 
                            width: 20, 
                            targets: 0 
                        }, // change width column 
                        { 
                            width:50, 
                            targets: 1
                        } // change width column 
                    ],
                    initComplete: function(settings, json) {
                        //alert('ini complete');
                   }, 
                   fnDrawCallback:function(){
                        //lert('draw fnDrawCallback');
                   },
                   "drawCallback": function( settings ) {
                        //alert( 'DataTables has redrawn the table' );
                    }
                } );

                $('#example tbody').mousedown(function(e){ 
                    if( e.button == 2 ) { 
                      //alert('Right mouse button!'); 
                      return false; 
                    } 
                    return true; 
                  }); 

</script>

