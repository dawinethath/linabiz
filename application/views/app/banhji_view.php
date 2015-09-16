<div id="wrapperApplication" class="container-fluid"></div>

<!-- template section starts -->
<script type="text/x-kendo-template" id="layout">
	<div id="menu"></div>				
	<div id="content" class="row-fluid"></div>
</script>
<script type="text/x-kendo-template" id="menu-tmpl">
	<div class="menu-hidden sidebar-hidden-phone fluid menu-left hidden-print">
		<div class="navbar main" id="main-menu">
			<ul class="topnav">
				<li class="dropdown dd-1 span3">
					<a href="\#" class="dropdown-toggle" data-toggle="dropdown" id="brand-menu">Banhji <span id="current-section"></span></a>
					<ul class="dropdown-menu" id="dropdownMenu">
						<li id="home-menu"><a href="#">គេហទំព័រ</a></li>
						<li id="customer-menu"><a href="#/customer">អតិថិជន</a></li>
						<li id="vendor-menu"><a href="#/vendor">អក្នផ្គត់ផ្គង់</a></li>
						<li id="account-menu"><a href="#/products">ទំនិញ</a></li>						
						<li class="divider"></li>
						<li id="myac-menu"><a href="#/my">គណនីខ្ញុំ</a></li>
		        	</ul>
		        </li>
			</ul>			
			<ul class="topnav pull-right">
				<li data-bind="visible: isAdmin" class="dropdown dd-1">
					<a href="\#" class="dropdown-toggle" data-toggle="dropdown"><span id="admin">Admin</span></a>
					<ul class="dropdown-menu" id="dropdownMenu">
						<li id="home-menu"><a href="#">គេហទំព័រ</a></li>
						<li id="userList"><a href="#/userList">អ្នកប្រើ</a></li>
						<li id="branchList"><a href="#/branch">សាខា</a></li>
						<li id="accountList"><a href="#/accounting">គណនេយ្យ</a></li>
						<li id="structureList"><a href="#/structure">ថ្នាក់</a></li>
		        	</ul>
				</li>
				<li data-bind="visible: isLogin"><a href="#logout" class="glyphicons power" data-bind="click: logout"><i></i>ចាក់ចេញ</a></li>
			</ul>
			<ul class="topnav" id="secondary-menu">
			</ul>
		</div>
	</div>
</script>
<script type="text/x-kendo-template" id="myId">
	<div class="container-fluid mainContainer">
		<div class="row full-height">
			<div id="mySidebar" class="span2 main full-height">
				<ul class="nav nav-list">
					<li><a href="#company">My Information</a></li>
					<li><a href="#company">Change Password</a></li>
					<li><a href="#company">Change Language</a></li>
					<li class="divider"></li>
					<li><a href="#company">Company</a></li>
				</ul>
			</div>
			<div id="myContent" class="span10">Content</div>
		</div>
	</div>
</script>
<script type="text/x-kendo-template" id="index">
	<span class="span6">
		<ul id="module-image">
			<li>
				<a href="#/customers">
					<img src="<?php echo base_url(); ?>resources/img/Customer.png" alt="Customer">
				</a>
			</li>
			<li>
				<a href="#/vendors">
					<img src="<?php echo base_url(); ?>resources/img/Vendor.png" alt="Vendor">
				</a>
			</li>
			<li>
				<a href="<?php echo base_url(); ?>app#accounting">
					<img src="<?php echo base_url(); ?>resources/img/Accounting.png" alt="Accounting">
				</a>
			</li>
			<li>
				<a href="#/products">
					<img src="<?php echo base_url(); ?>resources/img/Inventory.png" alt="Inventory">
				</a>
			</li>
			<li>
				<a href="<?php echo base_url(); ?>app#transformers">
					<img src="<?php echo base_url(); ?>resources/img/Electricity.png" alt="Electricity">
				</a>
			</li>
			<li>
				<a href="<?php echo base_url(); ?>app#water">
					<img src="<?php echo base_url(); ?>resources/img/Water.png" alt="Water">
				</a>
			</li>
			<li></li>
			<li>
				<a href="<?php echo base_url(); ?>app#reports">
					<img src="<?php echo base_url(); ?>resources/img/Report.png" alt="Report">
				</a>
			</li>
			<li></li>
		</ul>
	</span>
</script>
<script type="text/x-kendo-template" id="login-tmpl">
	<div class="container-960">
		<div class="row">
			<div class="span3 offset4">
				<label for="email">អីម៉ែល</label>
				<input type="email" placeholder="email" data-bind="value:email, events: {change: validateEmail}">
				<label for="password">លេខសំងាត់</label>
				<input type="password" placeholder="password" data-bind="value:password, events: {change: validatePWD}">
				<button class="btn btn-primary" data-bind="click:login">ចាក់ចូល</button>
				<button class="btn" data-bind="click:register">ចុះឈ្មោះ</button>
			</div>
		</div>
	</div>
	<div id="dialog" style="invisibility: hidden">សូមពិនិត្យអីម៉េល​ រឺ លេខសំងាត់។</div>
</script>
<script type="text/x-kendo-template" id="my-tmpl">
	<div class="container">
		<div class="row">
			<div class="span2">
				<ul class="nav nav-tabs nav-stacked">
				  	<li><a href="#/my">My Detail</a></li>
				  	<li><a href="#/my/changePWD">Change Password</a></li>
				  	<li><a href="#/my/addEmail">Add Email</a></li>
				  	<li><a href="#/my/addPhone">Add Phone</a></li>
				</ul>
			</div>
			<div class="span10" id="myContainer">kfjsdklfjsdklf</div>
		</div>
	</div>
</script>
<script type="text/x-kendo-template" id="my-detail-tmpl"></script>
<script type="text/x-kendo-template" id="my-password-tmpl"></script>
<script type="text/x-kendo-template" id="my-email-tmpl"></script>
<script type="text/x-kendo-template" id="my-phone-tmpl"></script>
<script type="text/x-kendo-template" id="my-edit-picture-tmpl"></script>
<script type="text/x-kendo-template" id="admin-tmpl">
	<div class="container">
		<div class="row">
			<div class="span12" id="myContainer"></div>
		</div>
	</div>
</script>
<script type="text/x-kendo-template" id="admin-userList-tmpl">
	<table class="table">
		<thead>
			<tr>
				<td>
					ឈ្មោះប្រើ
				</td>
				<td>នៅប្រើ</td>
				<td>ថ្ងៃបង្ើត</td>
				<td>ថ្ងៃកែ</td>
				<td><button>ថ្មី</button></td>
			</tr>
		</thead>
		<tbody data-role="listview" data-bind="source: dataStore" data-template="userList-tmpl"></tbody>
	</table>
</script>
<script type="text/x-kendo-template" id="admin-structure-tmpl">

	<table class="table">
		<thead>
			<tr>
				<td>
					លេខកូដ
				</td>
				<td>ព៌ណនា</td>
				<td>ថ្ងៃបង្ើត</td>
				<td>ថ្ងៃកែ</td>
				<td><a href="#/admin/structure/new" class="btn">បង្កើត	ថ្មី</a></td>
			</tr>
		</thead>
		<tbody data-role="listview" 
			   data-bind="source: dataStore" 
			   data-template="admin-structure-list-tmpl" 
			   data-selectable='true'></tbody>
		<tfoot>
			<tr>
				<td colspan='5' style="padding: 0; margin:0">
					<div data-role="pager" data-bind="source: dataStore" data-page-size='true' data-refresh='true'></div>
				</td>
			</tr>
		</tfoot>
	</table>
</script>
<script type="text/x-kendo-template" id="admin-structure-list-tmpl">
	<tr>
		<td>#=code#</td>
		<td>#=description#</td>
		<td>#=created_at#</td>
		<td>#=updated_at#</td>
		<td>
			<a href="\#/structure/#=id#">កែ</a>&nbsp;|&nbsp;
			<a href="\#/structure/#=id#/segments">ថ្នាក់រង</a>&nbsp;|&nbsp;
			<a href="\#/structure/new">ថ្មី</a>
		</td>
	</tr>
</script>
<script type="text/x-kendo-template" id="admin-structure-new-tmpl">
	<div>
		<button class="btn" data-bind="click: close">X</button>
	</div>
	<div class="pull-left">
	 	<label for="code">លេខកូដ</label>
	 	<input type="text" data-bind="value: current.code" /><br/>
	 	<label for="description">ពតមានលំអិត</label>
	 	<input type="text" data-bind="value: current.description" /><br/>
	 	<button data-bind="click: save">រក្សាទុក</button><br>
	 </div>
	 <div class="pull-left" style="margin-left: 30px;">
	 	<div>
	 		<table class="table">
	 			<thead>
	 				<tr>
	 					<td></td>
	 					<td>ខ្ទង់លេខកូដ</td>
	 					<td>រាយនាម</td>
	 				</tr>
	 			</thead>
	 			<tbody data-role="listview" 
	 				   data-bind="source: segments.dataStore" 
	 				   data-template="admin-structure-segment-list-tmpl"
	 				   data-selectable="multiple">
	 			</tbody>
	 		</table>
	 	</div>
	 </div>
</script>
<script type="text/x-kendo-template" id="admin-structure-segment-list-tmpl">
	<tr>
		<td><button class="btn" data-bind="click: segSelected">រើសមួយ</button></td>
		<td>#=code_length#</td>
		<td>#=name#</td>
	</tr>
</script>
<script type="text/x-kendo-template" id="admin-structure-single-tmpl">
	<div class="pull-left">
	 	<label for="code">លេខកូដ</label>
	 	<input type="text" data-bind="value: current.code" /><br/>
	 	<label for="description">ពតមានលំអិត</label>
	 	<input type="text" data-bind="value: current.description" /><br/>
	 	<button data-bind="click: save">រក្សាទុក</button>&nbsp;
	 	<button data-bind="click: save">លុប</button>
	</div>
</script>
<script type="text/x-kendo-template" id="userList-tmpl">
	<tr>
		<td>#=username#</td>
		<td>#=status#</td>
		<td>#=created_at#</td>
		<td>#=updated_at#</td>
		<td>
			<a href="\#/userList/#=id#/edit">កែ</a>&nbsp;|&nbsp;
			<a href="\#/userList/#=id#/changePassword">កែលេខសំងាត់</a>&nbsp;|&nbsp;
			<a href="\#/userList/new">ថ្មី</a>
		</td>
	</tr>
</script>
<script type="text/x-kendo-template" id="userList-new-tmpl">
	<div>
		<label for="username">ឈ្មោះប្រើ</label>
	 	<input type="text" data-bind="value: current.username" /><br/>
	 	<label for="password">លេខសំងាត់</label>
	 	<input type="password" data-bind="value: current.password" /><br/>
	 	<input type="checkbox" data-bind="checked: current.status" />&nbsp;នៅប្រើ<br/>
	 	<button data-bind="click: save">រក្សាទុក</button><br>
	 </div>
</script>
<script type="text/x-kendo-template" id="userList-edit-tmpl">
	<div>
	 	<label for="username">ឈ្មោះប្រើ</label>
	 	<input type="text" data-bind="value: current.username" disabled/><br/>
	 	<input type="checkbox" data-bind="checked: current.status" />&nbsp;នៅប្រើ<br/>
	 	<button data-bind="click: save">រក្សាទុក</button><br>
	</div>
</script>
<script type="text/x-kendo-template" id="userList-password-tmpl">
	<div>
	 	<label for="password">លេខសំងាត់</label>
	 	<input type="password" data-bind="value: password" /><br/>
	 	<label for="confirmedPWD">បញ្ជាក់លេខសំងាត់</label>
	 	<input type="password" data-bind="value: confirmedPWD" /><br/>
	 	<button data-bind="click: savePassword">រក្សាទុក</button><br>
	 </div>
</script>
<script type="text/x-kendo-template" id="admin-companyList-tmpl">
	
</script>
<script type="text/x-kendo-template" id="company">
	<div class="container-fluid mainContainer">
		<div class="row full-height">
			<div id="mySidebar" class="span2 main full-height">
				<ul class="nav nav-list">
					<li><a href="#company">ក្រុមហ៊ុន</a></li>
					<li><a href="#company/new">បង្កើតថ្មី</a></li>
					<li><a href="#company/assign">បញ្ចូលអ្នកប្រើ</a></li>
				</ul>
			</div>
			<div id="companyContent" class="span10"></div>
		</div>
	</div>
</script>
<script type="text/x-kendo-template" id="companyList">
	<table class="table table-striped">
		<tbody data-role="listview" data-bind="source: company.dataSource"
								  data-template="companyListItem">
		</tbody>
	</table>
</script>
<script type="text/x-kendo-template" id="companyListItem">
	<tr>
		<td>#=name#</td>
		<td>#=legalName#</td>
		<td>#=phone#</td>
		<td>#=mobile#</td>
		<td>#=email#</td>
		<td>#=address#</td>
		<td><a href="\#company/assign">បញ្ចូលអ្នកប្រើ</a></td>
	</tr>
</script>

<script id="rInvoicePrint" type="text/x-kendo-template">
	<div class="container-960">
	    <div class="row">
	        <div class="col-md-12">
	            <div id="example" class="k-content">
	                <div class="hidden-print" align="center">                    
	                    <input class="k-textbox"
	                           data-bind="value: searchField, events:{change: search}"
	                           placeholder="លេខបន្ទប់" />

	                    <a id="search" class="k-button" data-bind="click: search"><span class="k-icon k-i-search"></span></a> |
	                    <button class="btn btn-icon btn-inverse" onclick="javascript:window.print()">បោះពុម្ព</button> |
	                    <input type="checkbox" data-bind="click: printData" /> ប្រើក្រដាសពុម្ព |                    
	                    <input type="checkbox" data-bind="click: printFrame" /> ពុម្ពក្រដាស 
	                    <br /><br />
	                    <div id="pager" class="k-pager-wrap"
	                         data-role="pager" data-bind="source: dataSource"
	                         style="width: 510px;"></div>                                         
	                </div>               

	                <div align="center">
	                    <div data-role="listview"
	                         data-template="rInvoice-print-template"
	                         data-bind="source: dataSource"                        
	                         style="width: 298px; border:none;"></div>
	                </div>

	            </div>
	        </div>
	    </div>
	</div>
</script>
<script id="rInvoice-print-template" type="text/x-kendo-tmpl">
	<br><br>    
    <h3 class="hiddenPrint" align="center">វិក្កយបត្រ</h3>

    <table width="100%">
        <tr>
            <td>បន្ទប់</td>
            <td class="hiddenPrintFrame">
                #=room_number#
                -
                #=customer_name#
            </td>
            <td align="right">ប្រចាំខែ</td>
            <td class="hiddenPrintFrame" align="right">#=kendo.toString(new Date(month_of), "MM-yyyy")#</td>
        </tr>
        <tr>
            <td>ថ្ងៃចូល</td>
            <td class="hiddenPrintFrame">#=kendo.toString(new Date(date_in), "dd-MM-yyyy")#</td>
            <td align="right"></td>
            <td align="right"></td>
        </tr>
    </table>

    <br />

    <table width="100%">
    	<thead style="border: 1px solid black;">
            <tr class="hiddenPrint">
                <th>បរិយាយ</th>
                <th>អំនាន</th>
                <th>ចំនួន</th>
                <th>គិត</th>
                <th>តំលៃ</th>
                <th>ទឹកប្រាក់</th>
            </tr>
        </thead>
        </tbody>
            <tr></tr>
            <tr class="hiddenPrintFrame">
                <td>ឈ្នួលបន្ទប់</td>
                <td></td>
                <td align="right">1</td>
                <td></td>
                <td align="right">#=kendo.toString(rental, 'c0')#</td>
                <td align="right">#=kendo.toString(rental, 'c0')#</td>
            </tr>
            <tr class="hiddenPrintFrame">
                <td>ថ្លៃទឹក</td>
                <td align="center">
                    #=wfrom#
                    -
                    #=wto#
                </td>
                <td align="right">
                    #=wqty# m<sup>3</sup>
                </td>
                <td align="right">
                    #=wadd_on#
                </td>
                <td align="right">
                    #=kendo.toString(wprice, 'c0', 'km-KH')#
                </td>
                <td align="right">
                    #=kendo.toString(wamt, 'c0', 'km-KH')#
                </td>
            </tr>            
            #if(trash>0){#
            <tr>
                <td>ថ្លៃសំរាម</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td align="right">
                    #=kendo.toString(trash, 'c')#
                </td>
            </tr>
            #}#
            #if(service>0){#
            <tr>
                <td><span style="font-size:x-small;">សេវាបង់ប្រាក់</span></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td align="right">
                    #=kendo.toString(service, 'c')#
                </td>
            </tr>
            #}#           
        </tbody>          
    </table>     
    
    <hr>

    <div class="hiddenPrintFrame" align="right" style="font-size: medium;">សរុបៈ #=kendo.toString(total, 'c3')#</div> 

    <div style="min-height: 70px;"></div>      

    <footer data-bind="invisible: framePrint" style="font-size: x-small; margin-bottom:0px; page-break-after: always;">
        <div class="hiddenprintframe">
            <p class="hiddenPrint" align="left">
                *ចំណាំ៖ <br />
                - បើមិនចង់ស្នាក់នៅបន្តត្រូវទូទាត់ប្រាក់ឪ្យគ្រប់សំរាប់ខែចាស់ <br />
                - បើសិនជាស្នាក់នៅបន្តលើស​ 1​ ថ្ងៃនឹងត្រូវគិតតម្លៃ 1 ខែ <br />
                - បើឈប់ស្នាក់នៅត្រូវឪ្យដំណឹងមុន 1អាទិត្យនៃថ្ងៃចូលស្នាក់
            </p>
        </div>
    </footer>	
</script>


<!-- //Lina Start -->
<script id="newProduct" type="text/x-kendo-template">
	<div class="container-960">
		<div id="example" class="k-content">
			<div class="widget widget-heading-simple widget-body-white">			
				<div class="widget-body">					
					<span class="pull-right glyphicons no-js remove_2" 
						data-bind="click: cancelChanges"><i></i></span>
					
					<h3>ទំនិញ</h3>

					<table class="table table-bordered table-white">					
						<tr>
							<td></td>						
							<td>							
		                        <input type="checkbox" data-bind="checked: product.favorite" />	Favorite                   		                     
							</td>							
						</tr>
						<tr>
							<td>ប្រភេទ</td>
							<td>
								<input id="ddlCategory" name="ddlCategory" 
									   data-role="dropdownlist"
									   data-option-label="(--- ជ្រើសរើស ---)"			                   
					                   data-value-primitive="true"
					                   data-text-field="name"
					                   data-value-field="id"
					                   data-bind="value: product.category_id,
					                              source: categoryDS"
					                   style="width: 100%"					                   
					                   required data-required-msg="ត្រូវការ ប្រភេទ" />
							</td>
						</tr>
						<tr>
							<td>SKU</td>
							<td>
								<input id="txtSku" name="txtSku" 
										type="text" class="k-textbox" 
										data-bind="value: product.sku"
										style="width: 100%" 										
										required data-required-msg="ត្រូវការ SKU" />
							</td>
						</tr>
						<tr>
							<td>មុខទំនិញ</td>
							<td>
								<input id="txtName" name="txtName" 
										type="text" class="k-textbox" 
										data-bind="value: product.name"
										style="width: 100%" 										
										required data-required-msg="ត្រូវការ មុខទំនិញ" />
							</td>
						</tr>
						<tr>
							<td>ពណ៌នា</td>
							<td>
								<input type="text" class="k-textbox" 
										data-bind="value: product.description"
										style="width: 100%" />
							</td>
						</tr>					
						<tr>
							<td>ចំនួន</td>
							<td>
								<input data-role="numerictextbox"		                   
				                   data-min="0"		                   
				                   data-bind="value: product.on_hand"
				                   style="width: 100%" />
							</td>
						</tr>
						<tr>
							<td>ចំនួនត្រូវការម៉ង់ឡើងវិញ</td>
							<td>
								<input data-role="numerictextbox"		                   
				                   data-min="0"		                   
				                   data-bind="value: product.order_point"
				                   style="width: 100%" />
							</td>
						</tr>
						<tr>
							<td>ខ្នាត</td>
							<td>
								<input data-role="dropdownlist"
									   data-option-label="(--- ជ្រើសរើស ---)"			                   
					                   data-value-primitive="true"
					                   data-text-field="name"
					                   data-value-field="id"
					                   data-bind="value: product.unit_id,
					                              source: unitDS"
					                   style="width: 100%" />
							</td>
						</tr>
						<tr>
							<td>Status</td>						
							<td>							
		                        <input type="checkbox" data-bind="checked: product.status" /> Active                   		                     
							</td>						
						</tr>
					</table>

					<br>

					<div align="center">
						<span id="notification"></span>

						<span id="save" class="btn btn-success btn-icon glyphicons hdd"><i></i>រក្សាទុក</span>
						<span class="btn btn-danger btn-icon glyphicons delete" data-bind="click: delete, visible: isEdit"><i></i>លុប</span>
						<span class="btn btn-inverse btn-icon glyphicons remove_2" data-bind="click: cancelChanges"><i></i>បិទ</span>
					</div>
				</div>				
			</div>			
		</div>
	</div>
</script>
<script id="priceList" type="text/x-kendo-template">
	<div class="container-960">		
		<div id="example" class="k-content">
			<br>
			<div align="right">
				<span class="glyphicons no-js remove_2" 
					onclick="javascript:window.history.back();"><i></i></span>
			</div>
			
			<div class="widget widget-heading-simple widget-body-white">
				<h3>តំលៃមុខទំនិញ</h3>

				<div class="widget widget-heading-simple widget-body-white">
				    <div class="widget-body">
				        <div class="innerL">
				            <div class="glyphicons glyphicon-large cargo">
				                	<i></i>
				                	<h4> 
				                		<span data-bind="text: product.sku"></span>
				                		-
				                		<span data-bind="text: product.name"></span>
				                	</h4>
				                	<p>
				                		ចំនួន: <span data-bind="text: product.on_hand"></span> <br>		                		
										ពណ៌នា: <span data-bind="text: product.description"></span>										
				                	</p>
				            </div>
				        </div>
				    </div>
				</div>				

				<br>

				<div id="priceList-window" data-role="window" data-visible="false" data-modal="true" data-resizable="false" data-iframe="true">				    	
					<table>
						<tr>
							<td>តំលៃ</td>
							<td>
								<input data-role="numerictextbox"		                   
				                   data-min="0"		                   
				                   data-bind="value: priceList.price" />
							</td>
						</tr>
						<tr>
							<td>រូបិយ​ប័ណ្ណ</td>
							<td>
								<input data-role="dropdownlist"
									   data-option-label="(--- ជ្រើសរើស ---)"			                   
					                   data-value-primitive="true"
					                   data-text-field="code"
					                   data-value-field="id"
					                   data-bind="value: priceList.currency_id,
					                              source: currencyDS" />
							</td>
						</tr>
						<tr>
							<td>តំលៃលឯកត្តា</td>
							<td>
								<input data-role="numerictextbox"		                   
				                   data-min="0"		                   
				                   data-bind="value: priceList.unit_value" />
							</td>
						</tr>
						<tr>
							<td>ឯកត្តា</td>
							<td>
								<input data-role="dropdownlist"
									   data-option-label="(--- ជ្រើសរើស ---)"			                   
					                   data-value-primitive="true"
					                   data-text-field="name"
					                   data-value-field="id"
					                   data-bind="value: priceList.unit_id,
					                              source: unitDS" />
							</td>
						</tr>
					</table>

					<br>

					<span class="btn btn-success btn-icon glyphicons hdd" data-bind="click: save"><i></i>រក្សាទុក</span>
					<span class="btn btn-danger btn-icon glyphicons remove_2" data-bind="click: closeWindow"><i></i>បិទ</span>  
				</div>				

				<button class="btn btn-inverse" data-bind="click: openWindow"><i class="icon-plus icon-white"></i></button>
				បញ្ចូលតំលៃថ្មី
				</br>
				<table class="table table-bordered table-condensed">
			        <thead>
			            <tr>	            	
			            	<th>តំលៃលក់</th>			            		                
			                <th>តំលៃលឯកត្តា</th>
			                <th>ឯកត្តា</th>			                
			                <th></th>	                
			            </tr>
			        </thead>
			        <tbody data-template="priceList-template"
			        	data-auto-bind="false"			        	
			        	data-bind="source: dataSource"></tbody>
			    </table>

				<br>

				<table class="table table-bordered table-condensed">
			        <thead>
			            <tr>	            	
			            	<th>កាលបរិច្ឆេក</th>
			            	<th>ក្រុមហ៊ុន</th>	                
			                <th>មុខទំនិញ</th>
			                <th>ពណ៌នា</th>
			                <th>ចំនួន</th>
			                <th>ឯកត្តា</th>
			                <th>តំលៃ</th>			                	                
			            </tr>
			        </thead>
			        <tbody data-template="stock-priceList-template"
			        	data-auto-bind="false"
			        	data-pageable="true" 
			        	data-bind="source: stockDS"></tbody>
			    </table>
			    <div id="pager" class="k-pager-wrap"
		             data-role="pager" data-bind="source: stockDS"></div>

			</div>
		</div>
	</div>
</script>
<script id="priceList-template" type="text/x-kendo-template">
    <tr>
    	<td>#=kendo.toString(price, "c", locale)#</td>    	
    	<td>#=unit_value#</td>
    	<td>#=unit#</td>    	
    	<td>
    		<div class="btn-group">
			  	<button class="btn">Action</button>
			  	<button class="btn dropdown-toggle" data-toggle="dropdown">
			    	<span class="caret"></span>
			  	</button>
			  	<ul class="dropdown-menu">			   		
			   		<li><span data-bind="click: delete">លុប</span></li>
			   		<li><span data-bind="click: edit">កែ</span></li>
			  	</ul>
			</div>			
    	</td>
    </tr>
</script>
<script id="stock-priceList-template" type="text/x-kendo-template">
    <tr>    	
    	<td>#=kendo.toString(new Date(issued_date), "dd-MM-yyyy")#</td>
    	<td>#=contact[0]==null?"":contact[0].company#</td>
    	<td>#=product[0].name#</td>
    	<td>#=product[0].description#</td>
    	<td>
    		#if(quantity>0){#
    			<span class="label label-success">#=quantity#</span>    			
    		#}else{#
    			<span class="label label-important">#=quantity#</span>
    		#}#
    	</td>
    	<td>#=unit[0]==null?"":unit[0].name#</td>    	
    	<td>#=kendo.toString(price, "c", currency[0].locale)#</td>    	
    </tr>
</script>

<script id="product" type="text/x-kendo-template">
	<div class="container-fluid">
		<br>
		<span class="pull-right glyphicons no-js remove_2" 
			onclick="javascript:window.history.back();"><i></i></span>

		<h3>ទំនិញ</h3>

		<div class="box-generic">
		    <!-- //Tabs Heading -->
		    <div class="tabsbar">
		        <ul>
		            <li class="glyphicons star active"><a href="#tab1" data-toggle="tab" data-bind="click: searchFavorite"><i></i> Favorites </a>
		            </li>
		            <li class="glyphicons list"><a href="#tab2" data-toggle="tab"><i></i> ប្រភេទ </a>
		            </li>
		            <li class="glyphicons building"><a href="#tab3" data-toggle="tab"><i></i> ក្រុមហ៊ុន </a>
		            </li>
		            <li class="glyphicons circle_plus"><a href="#/new_product"><i></i> មុខទំនិញថ្មី </a>
		            </li>
		            <li class="glyphicons shopping_cart"><a href="#/bills"><i></i> រទេះទំនិញ </a>
		            </li>	            
		        </ul>
		    </div>
		    <!-- // Tabs Heading END -->

		    <div class="tab-content">
		        <!-- // FavoriteTab content -->
		        <div class="tab-pane active" id="tab1">
		        		
		        </div>
		        <!-- // Favorite Tab content END -->

		        <!-- // Category Tab content -->
		        <div class="tab-pane" id="tab2">
		            <div data-role="listview"
		            	 data-selectable="true"			                 
		                 data-template="category-template"
		                 data-bind="source: categoryDS, events:{ change: categoryChanges}"></div>
            	</div>
		        <!-- // Category Tab content END -->

		        <!-- // Vendor Tab content -->
		        <div class="tab-pane" id="tab3">
		            <div data-role="listview"
		            	 data-auto-bind="false"
		            	 data-selectable="true"			                 
		                 data-template="vendor-search-template"
		                 data-bind="source: contactDS, events:{ change: vendorChanges}"></div>
		        </div>
		        <!-- // Vendor Tab content END -->		        
		    </div>

		    <br>

		    <div class="input-append">
			    <input class="col-md-2" id="appendedInputButtons" 
			    	type="text" placeholder="មុខទំនិញ ..." 
			    	data-bind="value: searchField, events:{ change: search }">
			    <button class="btn btn-default" type="button"><i class="icon-search"></i> ស្វែងរក</button>				    
			</div>
		</div>
		
		<br>

		<table class="table table-bordered">
	        <thead>
	            <tr>
	                <th>លេខកូដ</th>
	                <th>មុខទំនិញ</th>
	                <th>ពណ៌នា</th>
	                <th>ចំនួន</th>
	                <th>ទិញ</th>
	                <th>លក់</th>	                
	                <th></th>
	            </tr>
	        </thead>
	        <tbody data-template="product-template"
	        	data-pageable="true" 
	        	data-bind="source: dataSource"></tbody>
	    </table>
	    <div id="pager" class="k-pager-wrap"
             data-role="pager" data-bind="source: dataSource"></div>

        <div id="cart-window" data-role="window" data-visible="false" data-modal="true" data-resizable="false" data-iframe="true">				    	
			<table class="table table-bordered table-condensed">
				<thead>
					<thead>
			            <tr>			                
			                <th>មុខទំនិញ <br> Items</th>
			                <th>ចំនួន <br> Qty</th>
			                <th>តម្លៃ <br> Price</th>	                
			                <th>សរុប <br> Amount</th>
			            </tr>
			        </thead>
				</thead>
				<tbody>
					<tr>					
						<td>
							<input type="text" class="k-textbox" data-bind="value: cart[0].description" />
						</td>
						<td>
							<input data-role="numerictextbox" 
									data-format="n" data-min="0"
									data-bind="value: cart[0].quantity, events: {change : change}" />

							<input data-role="dropdownlist"                   
				                   data-text-field="unit"
				                   data-value-field="unit_id"
				                   data-value-primitive="true"
				                   data-bind="value: cart[0].unit_id,
				                              source: priceListDS, 
				                              events: {change : priceChanges}" />
						</td>				
						<td>
							<input type="text" class="k-textbox" data-bind="value: cart[0].price" />

							<input data-role="dropdownlist"                   
				                   data-text-field="code"
				                   data-value-field="id"
				                   data-bind="value: cart[0].currency_id,
				                              source: currencyDS" />
						</td>		
						<td align="right">			
							<span data-bind="text: cart[0].amount"></span>			
						</td>					
					</tr>
				</tbody>
			</table>

			<br>

			<span class="btn btn-success btn-icon glyphicons shopping_cart" data-bind="click: addToCart"><i></i>ដាក់ចូលរទេះ</span>
			<span class="btn btn-danger btn-icon glyphicons remove_2" data-bind="click: closeWindow"><i></i>បិទ</span>  
		</div>

	</div>
</script>
<script id="product-template" type="text/x-kendo-template">
    <tr>
    	<td>#=sku#</td>
    	<td>#=name#</td>
    	<td>#=description#</td>
    	<td>#=on_hand# / #=unit==null?"null":unit#</td>
    	<td>
    		<span class="badge badge-success"> #=kendo.toString(cost.price, "c", cost.locale)# </span> / #=cost.unit#
    	</td>
    	<td>
    		#for(var i=0; i<price_lists.length; i++) {#    			
    			<span class="badge badge-success"> #=kendo.toString(price_lists[i].price, "c", price_lists[i].locale)# </span> / #=price_lists[i].unit# <br>    						 
			#}#
    	</td>    	
    	<td>
    		<div class="btn-group">    			
			  	<button class="btn" data-bind="click: openWindow"><i class="icon-shopping-cart"></i></button>
			  	<button class="btn dropdown-toggle" data-toggle="dropdown">
			    	<span class="caret"></span>
			  	</button>
			  	<ul class="dropdown-menu">			  					   		
			   		<li><a href="\#/new_stock/#=id#"><i class="icon-truck"></i> ចូលទំនិញ</a></li>
			   		<li><a href="\#/price_list/#=id#"><i class="icon-usd"></i> កំណត់តំលៃ</a></li>
			   		<li><a href="\#/new_product/#=id#"><i class="icon-edit"></i> កែមុខទំនិញ</a></li>
			  	</ul>
			</div>
    	</td>    		
    </tr>
</script>
<script id="category-template" type="text/x-kendo-template">
	<span class="btn btn-success">#=name#</span>   
</script>
<script id="vendor-search-template" type="text/x-kendo-template">
    <div class="product-tmpl">
        <img src="#=image_url#" alt="#: company # image" />
        <h3>#:company#</h3>        
    </div>    
</script>
<style>
    #listView {
        padding: 10px 5px;
        margin-bottom: -1px;
        min-height: 510px;
    }
    .product-tmpl {
        float: left;
        position: relative;
        width: 111px;
        height: 170px;
        margin: 0 5px;
        padding: 0;
    }
    .product-tmpl img {
        width: 110px;
        height: 110px;
    }
    .product-tmpl h3 {
        margin: 0;
        padding: 3px 5px 0 0;
        max-width: 96px;
        overflow: hidden;
        line-height: 1.1em;
        font-size: .9em;
        font-weight: normal;
        text-transform: uppercase;
        color: #999;
    }
    .product-tmpl p {
        visibility: hidden;
    }
    .product-tmpl:hover p {
        visibility: visible;
        position: absolute;
        width: 110px;
        height: 110px;
        top: 0;
        margin: 0;
        padding: 0;
        line-height: 110px;
        vertical-align: middle;
        text-align: center;
        color: #fff;
        background-color: rgba(0,0,0,0.75);
        transition: background .2s linear, color .2s linear;
        -moz-transition: background .2s linear, color .2s linear;
        -webkit-transition: background .2s linear, color .2s linear;
        -o-transition: background .2s linear, color .2s linear;
    }
    .k-listview:after {
        content: ".";
        display: block;
        height: 0;
        clear: both;
        visibility: hidden;
    }
</style>
<script id="newStock" type="text/x-kendo-template">
	<div class="container-960">
		<div id="example" class="k-content">
			<div class="widget widget-heading-simple widget-body-white">
				<div class="widget-body">
					<span class="pull-right glyphicons no-js remove_2" 
						data-bind="click: cancelChanges"><i></i></span>

					<h3>ស្តុក</h3>			
							
					<table class="table table-bordered table-white">						
						<tr>
							<td>កាលបរិច្ឆេក</td>
							<td>
								<input id="issuedDate" name="issuedDate"
									data-role="datepicker"
									data-format="dd-MM-yyyy"									
				                    data-bind="value: stock.issued_date"
				                   style="width: 100%"
				                   required data-required-msg="ត្រូវការ កាលបរិច្ឆេក">
							</td>
						</tr>											
						<tr>
							<td>ក្រុមហ៊ុន</td>
							<td>
								<input id="ddlVendor" name="ddlVendor" 
									   data-role="dropdownlist"
									   data-option-label="(--- ជ្រើសរើស ---)"			                   
					                   data-value-primitive="true"
					                   data-text-field="company"
					                   data-value-field="id"
					                   data-bind="value: stock.contact_id,
					                              source: contactDS"					                   
					                   style="width: 100%" 
					                   required data-required-msg="ត្រូវការ ក្រុមហ៊ុន" />
							</td>
						</tr>																	
						<tr>
							<td>ចំនួន</td>
							<td>
								<input data-role="numerictextbox"		                   
				                   data-min="0"		                   
				                   data-bind="value: stock.quantity"
				                   style="width: 100%" />
							</td>
						</tr>											
						<tr>
							<td>ខ្នាត</td>
							<td>
								<input id="ddlUnit" name="ddlUnit" 
									   data-role="dropdownlist"
									   data-option-label="(--- ជ្រើសរើស ---)"			                   
					                   data-value-primitive="true"
					                   data-text-field="name"
					                   data-value-field="id"
					                   data-bind="value: stock.unit_id,
					                              source: unitDS"					                   
					                   style="width: 100%" 
					                   required data-required-msg="ត្រូវការ ខ្នាត" />
							</td>
						</tr>											
						<tr>
							<td>តំលៃ</td>
							<td>
								<input data-role="numerictextbox"		                   
				                   data-min="0"		                   
				                   data-bind="value: stock.price"
				                   style="width: 100%" />
							</td>
						</tr>
						<tr>
							<td>រូបិយ​ប័ណ្ណ</td>
							<td>
								<input id="ddlCurrency" name="ddlCurrency" 
									   data-role="dropdownlist"
									   data-option-label="(--- ជ្រើសរើស ---)"			                   
					                   data-value-primitive="true"
					                   data-text-field="code"
					                   data-value-field="id"
					                   data-bind="value: stock.currency_id,
					                              source: currencyDS"					                   
					                   style="width: 100%" 
					                   required data-required-msg="ត្រូវការ រូបិយ​ប័ណ្ណ" />
							</td>							
						</tr>						
					</table>

					<br>

					<div align="center">
						<span id="notification"></span>

						<span id="save" class="btn btn-success btn-icon glyphicons hdd"><i></i>រក្សាទុក</span>
						<span class="btn btn-danger btn-icon glyphicons delete" data-bind="click: delete, visible: isEdit"><i></i>លុប</span>
						<span class="btn btn-inverse btn-icon glyphicons remove_2" data-bind="click: cancelChanges"><i></i>បិទ</span>
					</div>	
				</div>
			</div>
		</div>
	</div>
</script>

<script id="bill" type="text/x-kendo-template">
	<div class="container-960">
		<div id="example" class="k-content">				
				<span class="pull-right glyphicons no-js remove_2" 
						onclick="javascript:window.history.back();"><i></i></span>				

				<h3>រទេះទំនិញ</h3>

				<table class="table table-borderless table-condensed">
					<tr>
						<td>ប្រភេទ</td>
						<td>
							<select data-bind="value: bill.type" style="width: 100%;">
							  	<option value="invoice">វិក្កយបត្រ</option>
								<option value="receipt">បង្កាន់ដៃលក់</option>
								<option value="so">បញ្ជាលក់</option>
								<option value="gdn">លិខិតដឹកជញ្ជូន</option>
							</select>
						</td>
						<td>លេខ</td>
						<td>
							<input type="text" class="k-textbox" data-bind="value: bill.number" style="width: 100%;" />
						</td>						
					</tr>
			    	<tr>
			    		<td>ទូរស័ព្ទ</td>
			    		<td>
			    			<div class="input-append">
							  	<input class="k-textbox" type="text" data-bind="value: contact.phone, events: {change : phoneSearch}" />
							  	<button class="btn" type="button" data-bind="click: phoneSearch"><i class="icon-search"></i></button>
							</div>
			    		</td>			    		
			    		<td>ថ្ងៃចេញវិក្កបត្រ</td>
						<td>
							<input id="issuedDate" name="issuedDate"
									data-role="datepicker"
									data-format="dd-MM-yyyy"									
				                    data-bind="value: bill.issued_date"
				                    style="width: 100%"
				                    required data-required-msg="ត្រូវការ ថ្ងៃចេញវិក្កបត្រ" />
						</td>				
			    	</tr>
			    	<tr>		    		
			    		<td>អតិថិជន</td>
			    		<td>			    			
			    			<div class="input-append">
							  	<input class="k-textbox" type="text" data-bind="value: contact.name" />
							  	<button class="btn" type="button"><i class="icon-search"></i></button>
							</div>			    			
			    		</td>
			    		<td>ថ្ងៃផុតកំណត់</td>
						<td>
							<input id="dueDate" name="dueDate"
									data-role="datepicker"
									data-format="dd-MM-yyyy"									
				                    data-bind="value: bill.due_date"
				                    style="width: 100%"
				                    required data-required-msg="ត្រូវការ ថ្ងៃផុតកំណត់" />
						</td>			    		
			    	</tr>
			    	<tr>
			    		<td>អាស័យដ្ឋាន</td>			    		
			    		<td>
			    			<input type="text" class="k-textbox" style="width:100%" data-bind="value: bills.address" />
			    		</td>
			    		<td>សំគាល់</td>
			    		<td>
			    			<input type="text" class="k-textbox" style="width:100%" data-bind="value: bills.memo" />
			    		</td>
			    	</tr>
			    </table>
		    
			    <table class="table table-bordered table-condensed">
			    	<thead>
			            <tr>
			                <th style="width: 1%;" class="center">ល.រ <br> No</th>
			                <th>មុខទំនិញ <br> Items</th>
			                <th>ចំនួន <br> Qty</th>
			                <th>តម្លៃ <br> Price</th>	                
			                <th>សរុប <br> Amount</th>
			            </tr>
			        </thead>
			        <tbody data-template="bill-row-template" 
			        		data-auto-bind="false" 
			        		data-bind="source: lineDS"></tbody>		       	             
			    </table>
					
				<table width="100%">
					<tbody>
						<tr>
							<td>អ្នកទិញ / Buyer</td>
							<td align="center">អ្នកលក់ / Seller</td>					
							<td align="right" width="17%">សរុប (USD):</td>
							<td align="right" class="strong" width="30%">
								<span data-bind="text: bill.memo"></span>
							</td>
						</tr>
						<tr>
							<td></td>
							<td></td>					
							<td align="right">សរុប (រៀល):</td>
							<td align="right" class="strong">
								<span data-bind="text: bill.memo"></span>
							</td>
						</tr>						
					</tbody>
				</table>

				<div align="center">
					<span id="notification"></span>

					<span id="save" class="btn btn-success btn-icon glyphicons hdd"><i></i>រក្សាទុក</span>
					<span class="btn btn-danger btn-icon glyphicons delete" data-bind="click: delete, visible: isEdit"><i></i>លុប</span>
					<span class="btn btn-inverse btn-icon glyphicons remove_2" data-bind="click: cancelChanges"><i></i>បិទ</span>
				</div>			
		</div>
	</div>
</script>
<script id="bill-row-template" type="text/x-kendo-tmpl">
    <tr>
		<td class="center">
			#=id#
		</td>
		<td>
			<input type="text" class="k-textbox" data-bind="value: description" style="width: 100%;" />
		</td>
		<td>
			<input data-role="numerictextbox" 
					data-format="n" data-min="1"
					data-bind="value: quantity, events: {change : change}" style="width: 70px;" />
			<input data-role="dropdownlist"                   
                   data-text-field="name"
                   data-value-field="id"
                   data-bind="value: unit_id,
                              source: unitDS"
                   style="width: 100px;" />
		</td>				
		<td>
			<input data-role="numerictextbox" 
					data-format="n"
					data-bind="value: price, events: {change : change}" style="width: 100px;" />
			<input data-role="dropdownlist"                   
                   data-text-field="code"
                   data-value-field="id"
                   data-bind="value: currency_id,
                              source: currencyDS"
                              style="width: 60px;" />
		</td>		
		<td align="right">			
			#amount = kendo.parseFloat(quantity)*kendo.parseFloat(price)#
			#=kendo.toString(amount, "c", locale)#			
		</td>					
	</tr>     	
</script>

<script id="invoicePrint" type="text/x-kendo-template">
	<div class="container-960">
		<div style="height:100%; position:relative; margin:0; padding:0;">
			<div class="hidden-print">		
				<span class="pull-right glyphicons no-js remove_2" 
						onclick="javascript:window.history.back();"><i></i></span>

				<span class="btn btn-primary btn-icon glyphicons print" onclick="javascript:window.print();"><i></i> បោះពុម្ព</span>			
			</div>

			<br>			
		
			<h3 align="center">រស់ សុជាតិ<br> <span style="font-size: medium; color: black;">ROS SOCHEAT</span></h3>							
			<h5 align="center">ផ្គត់ផ្គង់គ្រឿងសំណង់គ្រប់ប្រភេទ <br> មានលក់ ឥដ្ឋ ខ្សាច់ ថ្ម សីុម៉ង់ត៍ ដែក បោះដំុ និង រាយ មានដឹកជញ្ជូនដល់ទីកន្លែង </h5>
			<h5 align="center"><span style="font-size:small;">ផ្ទះលេខ 728 ផ្លូវវេងស្រេង ភូមិត្រពាំងថ្លឹង​ សង្កាត់ចោមចៅ ខណ្ឌពោធិ៍សែនជ័យ រាជធានីភ្នំពេញ</span> <br> 017 47 21 54 / 087 700 702 / 0888 700 702</h5>
			
		    <h4 align="center">វិក្កយបត្រ <span style="color: black;">Invoice</span></h4>
	    
		    <table width="100%">
		    	<tr>
		    		<td colspan="2">
		    			អតិថិជន:
		    			<span data-bind="text: bill.contact[0].surname"></span>
		    			<span data-bind="text: bill.contact[0].name"></span>
		    		</td>		    		
		    		<td align="right" width="9%">ទូរស័ព្ទ:</td>
		    		<td width="24%">
		    			<span data-bind="text: bill.contact[0].phone"></span>
		    		</td>
		    		<td align="right" width="20%">លេខវិក្កយបត្រ:</td>
		    		<td align="right" width="20%">
		    			<span data-bind="text: bill.number"></span>
		    		</td>
		    	</tr>
		    	<tr>
		    		<td colspan="4">
		    			អាស័យដ្ឋាន:
		    			<span data-bind="text: bill.contact[0].address"></span>
		    		</td>		    		
		    		<td align="right">ថ្ងៃចេញវិក្កយបត្រ:</td>
		    		<td align="right">
		    			<span data-bind="text: bill.issued_date"></span>
		    		</td>
		    	</tr>
		    </table>
	    
		    <table class="table table-bordered table-condensed">
		    	<thead>
		            <tr>
		                <th style="width: 1%;" class="center">ល.រ <br> No</th>
		                <th>មុខទំនិញ <br> Items</th>
		                <th style="width: 15%;">ចំនួន <br> Qty</th>
		                <th style="width: 15%;">តម្លៃ <br> Price</th>	                
		                <th style="width: 15%;">សរុប <br> Amount</th>
		            </tr>
		        </thead>
		        <tbody data-template="invoice-print-row-template" 
		        		data-auto-bind="false" 
		        		data-bind="source: lineDS"></tbody>		       	             
		    </table>
				
			<table width="100%">
				<tbody>
					<tr>
						<td>អ្នកទិញ / Buyer</td>
						<td align="center">អ្នកលក់ / Seller</td>					
						<td align="right" width="17%">សរុប (USD):</td>
						<td align="right" class="strong" width="30%">
							<span data-bind="text: bill.memo"></span>
						</td>
					</tr>
					<tr>
						<td></td>
						<td></td>					
						<td align="right">សរុប (រៀល):</td>
						<td align="right" class="strong">
							<span data-bind="text: bill.memo"></span>
						</td>
					</tr>						
				</tbody>
			</table>

			<br><br>

			<div align="center" style="font-size: x-small; bottom:0;">			
				*ចំណាំ៖ ទំនិញទិញហើយមិនអាចប្ដូរវិញបានទេ / Purchased Items Not Refundable.			
			</div>			
		</div>
	</div>
</script>
<script id="invoice-print-row-template" type="text/x-kendo-tmpl">
    <tr>
		<td class="center">
			#=id#
		</td>
		<td style="font-size: x-small;">#=description#</td>
		<td class="center"><span style="font-size:x-small;">#=quantity#</span> <span style="font-size:xx-small;">#=unit#</span></td>
		<td class="right" style="font-size:x-small;">
			#if(locale=="km-KH"){#
				#=kendo.toString(price, "c0", locale)#
			#}else{#
				#=kendo.toString(price, "c", locale)#
			#}#
		</td>
		<td class="right" style="font-size:x-small;">
			#if(locale=="km-KH"){#
				#=kendo.toString(amount, "c0", locale)#
			#}else{#
				#=kendo.toString(amount, "c", locale)#
			#}#			
		</td>					
	</tr>     	
</script>
<!-- Lina End -->

<!--  template section ends  -->
<script src="<?php echo base_url(); ?>resources/js/libs/localforage.min.js"></script>
<script>
	var banhji = banhji || {};
	var baseUrl = '<?php echo base_url(); ?>api/';
	banhji.token = null;
	banhji.pageLoaded = {};
	localforage.config({
		driver: localforage.LOCALSTORAGE,
		name: 'userData'
	});

	function getDB() {
		var query = window.location.search;
		var entity = query.split('=');
		if(entity[0] === 'entity') {
			return false;
		} else {
			return entity[1];
		}
	}

	var auth   = kendo.observable({
		baseUrl 	: baseUrl + 'auth',
		data 		: null,
		current 	: null,
		passed 		: false,
		rememberMe 	: false,
		email 		: null,
		password 	: null,
		url 		: function(seg) {
			if(seg !== null) {
				return this.baseUrl + seg;
			}
			return this.baseUrl;
		},
		dataStore 	: new kendo.data.DataSource({
			transport: {
				create: {
					url: function() {
						return auth.url('/register');
					},
					headers: {
						"Entity": getDB()
					},
					type: "POST",
					dataType: "json"
				},
				read: {
					url: function() {
						return auth.url(null);
					},
					headers: {
						"Entity": getDB()
					},
					type: "GET",
					dataType: "json"
				},
				update: {
					url: function() {
						return auth.url(null);
					},
					headers: {
						"Entity": getDB()
					},
					type: "PUT",
					dataType: "json"
				},
				destroy: {
					url: function() {
						return auth.url(null);
					},
					headers: {
						"Entity": getDB()
					},
					type: "DELETE",
					dataType: "json"
				},
				parameterMap: function(data, operation) {
					if(operation === 'read') {
						return {
							limit: data.take,
							offset: data.skip,
							filter: data.filter
						};
					}
					return {models: kendo.stringify(data.models)};
				}
			},
			schema: {
	        	model: {
	        		id: "id"
	        	},
	        	data: "results"
	        },
			pageSize: 20,
			serverPaging: true,
			serverFiltering: true,
			batch: true
		}),
		register 	: function() {
			if(this.get('passed')) {
				this.dataStore.add({email: this.get('email'), password: this.get('password')});
				this.dataStore.sync();
				this.dataStore.bind('requestEnd', function(e){
					//
				});
			} else {
				alert('please check you email or password again.'+this.get('passed'));
			}	
		},
		login 		: function() {
			if(this.get('passed')) {
				this.dataStore.query({
					pageSize: 1,
					filter:[
						{field: 'username', value: this.get('email')},
						{field: 'password', value: this.get('password')}
					]
				})
				.then(function(e){
					var user = auth.dataStore.data()[0];
					localforage.setItem('user', user);
					banhji.router.navigate('/', false);
				});
			} else {
				$("#dialog").kendoWindow({
					modal: true,
				}).data('kendoWindow').center();
			}		
		},
		isAdmin 	: function() {
			var yes = false;
			if(this.getLogin()) {
				var userData = this.getLogin().roles;
				$.each(userData, function(i, v){
					if(v.name === 'Admin') {
						yes = true;
						return false;
					}
				});
			}
			return yes;
		},
		logout 		: function() {
			localforage.removeItem('user', function(err){
				banhji.router.navigate('login');
				$("#myacc").text("");
			});
		},
		getLogin 	: function() {
			return JSON.parse(localStorage.getItem('userData/user'));
		},
		validatePWD	: function() {
			if(this.get('password').length < 7) {
				alert("password must be atleast 7-character long");
				this.set('passed', false);
			}
			this.set('passed', true);
		},
		validateEmail: function() {
			var sQtext = '[^\\x0d\\x22\\x5c\\x80-\\xff]';
		  	var sDtext = '[^\\x0d\\x5b-\\x5d\\x80-\\xff]';
		  	var sAtom = '[^\\x00-\\x20\\x22\\x28\\x29\\x2c\\x2e\\x3a-\\x3c\\x3e\\x40\\x5b-\\x5d\\x7f-\\xff]+';
		  	var sQuotedPair = '\\x5c[\\x00-\\x7f]';
		  	var sDomainLiteral = '\\x5b(' + sDtext + '|' + sQuotedPair + ')*\\x5d';
		  	var sQuotedString = '\\x22(' + sQtext + '|' + sQuotedPair + ')*\\x22';
		  	var sDomain_ref = sAtom;
		  	var sSubDomain = '(' + sDomain_ref + '|' + sDomainLiteral + ')';
		  	var sWord = '(' + sAtom + '|' + sQuotedString + ')';
		  	var sDomain = sSubDomain + '(\\x2e' + sSubDomain + ')*';
		  	var sLocalPart = sWord + '(\\x2e' + sWord + ')*';
		  	var sAddrSpec = sLocalPart + '\\x40' + sDomain; // complete RFC822 email address spec
		  	var sValidEmail = '^' + sAddrSpec + '$'; // as whole string

		  	var reValidEmail = new RegExp(sValidEmail);

		  	if(!reValidEmail.test(this.get('email'))){
		  		alert("Please enter valid address");
				this.set('passed', false);
		  	}
		  	this.set('passed', false);
		}
	});
	var dataStore = function(url) {
		var o = new kendo.data.DataSource({
				transport: {
					read 	: {
						url: url,
						type: "GET",
						headers: {
							"Entity": getDB(),
							"User": auth.getLogin() === null ? '':auth.getLogin().id
						},
						dataType: 'json'
					},
					create 	: {
						url: url,
						type: "POST",
						headers: {
							"Entity": getDB(),
							"User": auth.getLogin() === null ? '':auth.getLogin().id
						},
						dataType: 'json'
					},
					update 	: {
						url: url,
						type: "PUT",
						headers: {
							"Entity": getDB(),
							"User": auth.getLogin() === null ? '':auth.getLogin().id
						},
						dataType: 'json'
					},
					destroy : {
						url: url,
						type: "DELETE",
						headers: {
							"Entity": getDB(),
							"User": auth.getLogin() === null ? '':auth.getLogin().id
						},
						dataType: 'json'
					},
					parameterMap: function(options, operation) {
						if(operation === 'read') {
							return {
								limit: options.take,
								page: options.page,
								filter: options.filter
							};
						} else {
							return {models: kendo.stringify(options.models)};
						}
					}
				},
				schema 	: {
					model: {
						id: 'id'
					},
					data: 'results',
					total: 'count'
				},
				batch: true,
				serverFiltering: true,
				serverPaging: true,
				pageSize: 100
			});
		return o;
	};
	var obj = function(url) {
		var o = kendo.observable({
			dataStore: new kendo.data.DataSource({
				transport: {
					read 	: {
						url: url,
						type: "GET",
						headers: {
							"Entity": getDB()
						},
						dataType: 'json'
					},
					create 	: {
						url: url,
						type: "POST",
						headers: {
							"Entity": getDB()
						},
						dataType: 'json'
					},
					update 	: {
						url: url,
						type: "PUT",
						headers: {
							"Entity": getDB()
						},
						dataType: 'json'
					},
					destroy : {
						url: url,
						type: "DELETE",
						headers: {
							"Entity": getDB()
						},
						dataType: 'json'
					},
					parameterMap: function(options, operation) {
						if(operation === 'read') {
							return {
								limit: options.take,
								offset: options.skip,
								filter: options.filter
							};
						} else {
							return {models: kendo.stringify(options.models)};
						}
					}
				},
				schema 	: {
					model: {
						id: 'id'
					},
					data: 'results',
					total: 'count',
					errors: 'error'
				},
				batch: true,
				serverFiltering: true,
				serverPaging: true,
				pageSize: 20
			}),
			findById: function(id) {},
			findBy 	: function(arr) {},
			insert 	: function(data) {},
			remove 	: function(model) {
				this.dataStore.remove(model);
				this.save();
			},
			save 	: function() {
				this.dataStore.sync();
				this.dataStore.bind('requestEnd', function(e){
					var type = e.type, res = e.response.results;
					console.log(type + " operation is successful.");
				});
			}
		});
		return o;
	}
	
	banhji.Layout = kendo.observable({
		locale: "km-KH",
		menu 	: [],
		isShown : true,
		isAdmin : auth.isAdmin(),
		logout 	: function(e) {
			e.preventDefault();
			auth.logout();
		},
		isLogin : function(){
			if(auth.getLogin()) {
				return true;
			} else {
				return false;
			}
		},
		init: function() {
			// initialize when the whole page load
		},
		ui: function() {
			// get UI information from source base on locale
		}
	});	
	banhji.my = kendo.observable({
		dataStore: dataStore(baseUrl + 'users'),
		findMyInfo: function() {},
		changePWD: function(){},
		addInfo  : function(){},
		addEmail : function(){},
		addPhone : function(){},
		delPhone : function(){},
		delEmail : function(){},
		save 	 : function(){
			this.dataStore.sync();
		}
	});
	var user = kendo.observable({
		data: null,
		password: "",
		confirmedPWD: "",
		pass: false,
		dataStore: new kendo.data.DataSource({
			transport: {
				create: {
					url: baseUrl + "users",
					headers: {
						"Entity": getDB()
					},
					type: "POST",
					dataType: "json"
				},
				read: {
					url: baseUrl + "users",
					headers: {
						"Entity": getDB()
					},
					type: "GET",
					dataType: "json"
				},
				update: {
					url: baseUrl + "users",
					headers: {
						"Entity": getDB()
					},
					type: "PUT",
					dataType: "json"
				},
				destroy: {
					url: baseUrl + "users",
					headers: {
						"Entity": getDB()
					},
					type: "DELETE",
					dataType: "json"
				},
				parameterMap: function(data, operation) {
					if(operation === 'read') {
						return {
							limit: data.take,
							offset: data.skip,
							filter: data.filter
						};
					}
					return {models: kendo.stringify(data.models)};
				}
			},
			schema: {
	        	model: {
	        		id: "id"
	        	},
	        	data: "results"
	        },
			pageSize: 20,
			serverPaging: true,
			serverFiltering: true,
			filter: [
				{field: 'status', value: true }
			],
			batch: true
		}),
		userRoleDS: new kendo.data.DataSource({
			transport: {
				create: {
					url: baseUrl + "users/roles",
					headers: {
						"Entity": getDB()
					},
					type: "POST",
					dataType: "json"
				},
				read: {
					url: baseUrl + "users/roles",
					headers: {
						"Entity": getDB()
					},
					type: "GET",
					dataType: "json"
				},
				update: {
					url: baseUrl + "users/roles",
					headers: {
						"Entity": getDB()
					},
					type: "PUT",
					dataType: "json"
				},
				destroy: {
					url: baseUrl + "users/roles",
					headers: {
						"Entity": getDB()
					},
					type: "DELETE",
					dataType: "json"
				},
				parameterMap: function(data, operation) {
					if(operation === 'read') {
						return {
							limit: data.take,
							offset: data.skip,
							filter: data.filter
						};
					}
					return {models: kendo.stringify(data.models)};
				}
			},
			schema: {
	        	model: {
	        		id: "id"
	        	},
	        	data: "results"
	        },
			pageSize: 20,
			serverPaging: true,
			serverFiltering: true,
			batch: true
		}),
		setCurrent: function(current) {
			this.set('current', current);
		},
		validatePWD	: function() {
			if(this.get('password').length < 7) {
				alert("password must be atleast 7-character long");
				this.set('passed', false);
			} else {
				this.set('passed', true);
			}
		},
		passwordMatch: function() {
			if(this.get('password') !== this.get('confirmedPWD')) {
				console.log("password do not match.");
			} else {
				console.log("Good to go.");
			}
		},
		validateEmail: function() {
			var sQtext = '[^\\x0d\\x22\\x5c\\x80-\\xff]';
		  	var sDtext = '[^\\x0d\\x5b-\\x5d\\x80-\\xff]';
		  	var sAtom = '[^\\x00-\\x20\\x22\\x28\\x29\\x2c\\x2e\\x3a-\\x3c\\x3e\\x40\\x5b-\\x5d\\x7f-\\xff]+';
		  	var sQuotedPair = '\\x5c[\\x00-\\x7f]';
		  	var sDomainLiteral = '\\x5b(' + sDtext + '|' + sQuotedPair + ')*\\x5d';
		  	var sQuotedString = '\\x22(' + sQtext + '|' + sQuotedPair + ')*\\x22';
		  	var sDomain_ref = sAtom;
		  	var sSubDomain = '(' + sDomain_ref + '|' + sDomainLiteral + ')';
		  	var sWord = '(' + sAtom + '|' + sQuotedString + ')';
		  	var sDomain = sSubDomain + '(\\x2e' + sSubDomain + ')*';
		  	var sLocalPart = sWord + '(\\x2e' + sWord + ')*';
		  	var sAddrSpec = sLocalPart + '\\x40' + sDomain; // complete RFC822 email address spec
		  	var sValidEmail = '^' + sAddrSpec + '$'; // as whole string

		  	var reValidEmail = new RegExp(sValidEmail);

		  	if(!reValidEmail.test(this.get('current').email)){
		  		alert("Please enter valid address");
				this.set('passed', false);
		  	}
		  	this.set('passed', false);
		},
		savePassword : function() {
			if(this.get('password') === this.get('confirmedPWD') && this.get('password').length > 6) {
				this.get('current').set('password', this.get('password'));
				this.save();
			} else {
				alert("សូមពិនិត្យឡើងវិញ");
			}
		},
		save: function() {	
			this.dataStore.sync();
			this.dataStore.bind('requestEnd', function(e){
				var type = e.type;
				var res  = e.response.results;
				if(type !== 'read') {
					alert('កត់ត្រាបានសំរេច');
				}	
			});	
		}
	});		
	var role = kendo.observable({
		dataStore 	: new kendo.data.DataSource({
			transport: {
				read: {
					url: baseUrl + 'roles',
					dataType: 'json',
					headers: {
						"Entity": getDB()
					},
					type: 'GET'
				},
				create: {
					url: baseUrl + 'roles',
					dataType: 'json',
					headers: {
						"Entity": getDB()
					},
					type: 'GET'
				},
				update: {
					url: baseUrl + 'roles',
					dataType: 'json',
					headers: {
						"Entity": getDB()
					},
					type: 'GET'
				},
				destroy: {
					url: baseUrl + 'roles',
					dataType: 'json',
					headers: {
						"Entity": getDB()
					},
					type: 'GET'
				},
				parameterMap: function(data, operation) {
					if(operation === 'read') {
						return {
							limit: data.take,
							offset: data.skip,
							filter: data.filter
						};
					}
					return {models: kendo.stringify(data.models)};
				}
			},
			schema: {
	        	model: {
	        		id: "id"
	        	},
	        	data: "results"
	        },
			pageSize: 20,
			serverPaging: true,
			serverFiltering: true,
			batch: true
		}),
		roleUserDs 	: new kendo.data.DataSource({
			transport: {
				read: {
					url: baseUrl + 'roles/user',
					dataType: 'json',
					headers: {
						"Entity": getDB()
					},
					type: 'GET'
				},
				create: {
					url: baseUrl + 'roles/user',
					dataType: 'json',
					headers: {
						"Entity": getDB()
					},
					type: 'POST'
				},
				update: {
					url: baseUrl + 'roles/user',
					dataType: 'json',
					headers: {
						"Entity": getDB()
					},
					type: 'PUT'
				},
				destroy: {
					url: baseUrl + 'roles/user',
					dataType: 'json',
					headers: {
						"Entity": getDB()
					},
					type: 'DELETE'
				},
				parameterMap: function(data, operation) {
					if(operation === 'read') {
						return {
							limit: data.take,
							offset: data.skip,
							filter: data.filter
						};
					}
					return {models: kendo.stringify(data.models)};
				}
			},
			schema: {
	        	model: {
	        		id: "id"
	        	},
	        	data: "results"
	        },
			pageSize: 20,
			serverPaging: true,
			serverFiltering: true,
			batch: true
		}),
		find 		: function(arg) {},
		setCurrent 	: function(currentRole) {},
		save 		: function() {}
	});	

	banhji.rInvoicePrint =  kendo.observable({
        framePrint : false,
        searchField : "",
        
        dataSource 	: dataStore(baseUrl + "rinvoices/index"),

        pageLoad    : function(){
            
        },
        search: function (e) {
            e.preventDefault();

            var searchField = this.get("searchField");

            if(searchField){
                this.dataSource.query({
                    page: 1,
                    pageSize: 1,
                    filter: { field:"room_number", value: searchField }
                });                    
            }else{
                this.dataSource.query({
                    page: 1,
                    pageSize: 50                    
                });
            }
           
        },
        printData 		: function(e) {
            var tar = e.target;
            if(tar.checked) {
                $(".hiddenPrint").css("visibility", "hidden");
            } else {
                $(".hiddenPrint").css("visibility", "visible");
            }
        },
        printFrame 		: function(e) {
            var tar = e.target;
            if(tar.checked) {
                $(".hiddenPrintFrame").css("visibility", "hidden");
            } else {
                $(".hiddenPrintFrame").css("visibility", "visible");
            }
        }
    });	
    banhji.newProduct =  kendo.observable({    	
    	dataSource 	: dataStore(baseUrl + "products/index"),
    	categoryDS 	: dataStore(baseUrl + "categories/index"),    	
    	unitDS	   	: dataStore(baseUrl + "units/index"),

    	product 	: null,
    	isEdit 		: false,
    	
    	pageLoad 		: function(id){    		
    		if(id){
    			this.set("isEdit", true);
    			this.loadProduct(id);
    		}else{
    			this.set("isEdit", false);
    			this.addEmpty();
    		}
    	},
    	loadProduct 	: function(id){
    		var self = this;

    		this.dataSource.query({    			
				filter: { field:"id", value: id }
			}).then(function(e){
				var view = self.dataSource.view();
						    	
		    	self.set("product", view[0]);
			});
    	},    	   	
      	addEmpty 		: function(){
      		this.dataSource.add({
      			category_id 	: 0,      			
      			unit_id			: 0,
      			sku 			: "",
      			name 			: "",
      			description		: "",
      			on_hand			: 0,      			     			
      			order_point 	: 0,
      			favorite 		: false,
      			image_url 		: "", 
      			status 			: 1
			});

			var data = this.dataSource.data();
			var obj = data[data.length - 1];
      						
			this.set("product", obj);
      	},
      	cancelChanges 	: function(e){
      		e.preventDefault();

      		this.dataSource.cancelChanges();
      		window.history.back();      		
      	},      	
      	save 			: function(){      		
      		this.dataSource.sync();
      		window.history.back();      		
      	},      	
      	delete 			: function(e){
			if (confirm("តើលោកអ្នកពិតជាចង់លុបមែនឬទេ?")) {        
		        var data = e.data;
		        this.dataSource.remove(data);
		        this.dataSource.sync();
	    	}	    	
	    }
    });
	banhji.priceList =  kendo.observable({    	
    	dataSource 	: dataStore(baseUrl + "price_lists/index"),
    	productDS 	: dataStore(baseUrl + "products/index"),
    	stockDS 	: dataStore(baseUrl + "stocks/index"),    	
    	currencyDS 	: dataStore(baseUrl + "currencies/index"),    	
    	unitDS	   	: dataStore(baseUrl + "units/index"),

    	product 	: null,
    	priceList 	: null,
    	
    	pageLoad 	: function(id){    		
    		this.dataSource.filter({ field:"product_id", value: id });    		
    		this.stockDS.filter({ field:"product_id", value: id });    		
    		this.loadProduct(id);
    	},
    	loadProduct : function(id){
    		var self = this;

    		this.productDS.query({    			
				filter: { field:"id", value: id }
			}).then(function(e){
				var view = self.productDS.view();
						    	
		    	self.set("product", view[0]);
			});
    	},
    	openWindow	: function(){
      		this.addEmpty();

         	var window = $("#priceList-window").data("kendoWindow");
          	window.title("តំលៃ");          	
          	window.center().open();         	
      	},
      	closeWindow : function(){	      		
      		this.dataSource.cancelChanges();

      		var window = $("#priceList-window").data("kendoWindow");          	         	
          	window.close();          	
      	},      	
      	addEmpty 	: function () {
      		this.dataSource.add({
      			currency_id 	: 0,      			
      			product_id		: this.get("product").id,
      			unit_id 		: 0,
      			price 			: 0,
      			unit_value		: 0,

      			currency 		: [],
      			product 		: [],
      			unit 			: []
			});

			var data = this.dataSource.data();
			var obj = data[data.length - 1];
      						
			this.set("priceList", obj);	
      	},      	 	
      	save 			: function(){
      		this.dataSource.sync();

      		var window = $("#priceList-window").data("kendoWindow");          	         	
          	window.close(); 		
      	},
      	edit 			: function(e){
      		var data = e.data;
      		
      		this.set("priceList", data);

      		var window = $("#priceList-window").data("kendoWindow");
          	window.title("តំលៃ");          	
          	window.center().open();       		
      	},      	
      	delete 			: function(e){
			if (confirm("តើលោកអ្នកពិតជាចង់លុបមែនឬទេ?")) {        
		        var data = e.data;
		        this.dataSource.remove(data);
		        this.dataSource.sync();
	    	}	    	
	    }
    });
	banhji.product =  kendo.observable({    	
    	dataSource 	: dataStore(baseUrl + "products/index"),
    	categoryDS 	: dataStore(baseUrl + "categories/index"),    	
    	contactDS  	: dataStore(baseUrl + "contacts/index"),
    	currencyDS 	: dataStore(baseUrl + "currencies/index"),
    	unitDS 	   	: dataStore(baseUrl + "units/index"),
    	priceListDS : dataStore(baseUrl + "price_lists/index"),   	

    	searchField	: "",
    	cart 		: [],    	
    	priceList 	: [],

    	pageLoad 		: function(){    		
    		
    	},
    	search 			: function(){
    		this.dataSource.filter({ field:"number", operator:"search", value: this.get("searchField") });
    	},
    	searchFavorite 	: function(){
    		this.dataSource.filter({ field:"favorite", value:1 });
    	},
    	categoryChanges : function(e){
    		var index = e.sender.select().index();
    		var data = this.categoryDS.at(index);

    		this.dataSource.filter({ field:"category_id", value:data.id });
    	},
    	vendorChanges 	: function(e){    		
    		var index = e.sender.select().index();
    		var data = this.contactDS.at(index);
    		
    		this.dataSource.filter({ field:"vendor", operator:"by_vendor", value:data.id });
    	},
    	addToCart 		: function(){
    		this.dataSource.add(this.get("cart"));
    	},
    	priceChanges 	: function(e){    		
    		var index = kendo.parseInt(e.sender.selectedIndex);
    		var pl = this.priceListDS.at(index);
    		
    		this.cart[0].price = pl.price;    		
    	},
    	openWindow		: function(e){
      		var data = e.data;

      		this.priceListDS.filter({ field:"product_id", value: data.id });
      		
      		this.set("cart", []);
      		this.cart.push({
      			bill_id 		: 0,
      			unit_id 		: data.price_lists[0].unit_id,      			
      			currency_id 	: 1,
      			product_id 		: data.id,
      			description		: data.name +" "+ data.description,
      			quantity		: 1,
      			price 			: data.price_lists[0].price,
      			amount 		 	: data.price_lists[0].price
      		});

         	var window = $("#cart-window").data("kendoWindow");
          	window.title("រទេះទំនិញ");          	
          	window.center().open();         	
      	},
      	closeWindow : function(){	      		
      		this.set("cart", []);

      		var window = $("#cart-window").data("kendoWindow");          	         	
          	window.close();          	
      	},
    });
    banhji.newStock =  kendo.observable({    	
    	dataSource 	: dataStore(baseUrl + "stocks/index"),    	
    	currencyDS 	: dataStore(baseUrl + "currencies/index"),
    	contactDS  	: dataStore(baseUrl + "contacts/index"),
    	unitDS 	   	: dataStore(baseUrl + "units/index"),

    	searchField	: "",
    	stock 		: null,
    	product_id 	: 0,
    	isEdit 		: false,

    	pageLoad 		: function(id){
    		this.set("product_id", id);    		    		
    		this.contactDS.filter({ field:"contact_type_id", value: 2 });
    		this.addEmpty();
    	},    	
      	addEmpty 		: function(){
      		this.dataSource.add({      			
      			currency_id 	: 1,
      			contact_id 		: 0,
      			product_id 		: this.get("product_id"),
      			unit_id 		: 0,
      			quantity		: 0,
      			price 			: 0,
      			issued_date		: new Date()
			});

			var data = this.dataSource.data();
			var obj = data[data.length - 1];
      						
			this.set("stock", obj);
      	},
      	edit 			: function(e){
      		var data = e.data;
      		
      		this.set("stock", data);      		    		

      		var window = $("#stock-window").data("kendoWindow");
          	window.title("ស្តុក");          	
          	window.center().open();
      	},
      	cancelChanges 	: function(e){
      		e.preventDefault();

      		this.dataSource.cancelChanges();
      		window.history.back();      		
      	}, 
      	save 			: function(){
      		this.dataSource.sync();
      		window.history.back();
      	},      	
      	delete 			: function(e){
			if (confirm("តើលោកអ្នកពិតជាចង់លុបមែនឬទេ?")) {        
		        var data = e.data;
		        this.dataSource.remove(data);
		        this.dataSource.sync();
	    	}	    	
	    }
    });
    banhji.bill =  kendo.observable({    	    	
    	dataSource 	: dataStore(baseUrl + "bills/index"),
    	lineDS 	 	: dataStore(baseUrl + "bills/line"),    	
    	currencyDS 	: dataStore(baseUrl + "currencies/index"),
    	contactDS  	: dataStore(baseUrl + "contacts/index"),    	
    	unitDS 	   	: dataStore(baseUrl + "units/index"),
    	
    	bill 		: null,
    	contact 	: null,

    	pageLoad 		: function(id){
    		var self = this;

    		if(id){
	    		this.dataSource.query({    			
					filter: { field:"id", value: id }
				}).then(function(e){
					var view = self.dataSource.view();
			    	self.set("bill", view[0]);

			    	self.contactDS.query({			    		    			
						filter: { field:"id", value: view[0].contact_id }
					}).then(function(e){
						var viewC = self.contactDS.view();
							    	
			    		self.set("contact", viewC[0]);
					});			    			    	
				});												
    			
    			this.lineDS.filter({ field:"bill_id", value: id });
    		}else{
    			if(this.dataSource.total()==0){
    			 	this.addEmpty();
    			 	this.addEmptyCustomer();
    			}    			
    		}
    	},    	
      	addEmpty 		: function(){
      		this.dataSource.add({      			
      			contact_id 		: 0,
      			biller_id 		: 0,      			
      			currency_id 	: 1,
      			reference_id 	: 0,
      			type 			: "invoice",
      			number 			: "",
      			amount 		 	: 0,
      			memo 			: "",      			
      			issued_date		: new Date(),
      			due_date 		: new Date()
			});

			var data = this.dataSource.data();
			var obj = data[data.length - 1];
      						
			this.set("bill", obj);
      	},
      	addEmptyCustomer 		: function(){
      		this.contactDS.add({      			
      			currency_id		: 0,
      			user_id 		: 0,      			
      			contact_type_id	: 1,      			
      			number 			: "",
      			surname 		: "",
      			name 			: "",
      			gender 			: "M",
      			dob 			: "",
      			pob 			: "",
      			address 		: "",
      			family_member 	: "",
      			id_number 		: "",
      			phone 			: "",
      			email 			: "",
      			job 			: "",
      			company 		: "",
      			image_url 		: "",      			
      			memo 			: "",
      			credit_limit 	: 0,
      			registered_date : new Date(),      			
      			status 			: 1,
			});

			var data = this.dataSource.data();
			var obj = data[data.length - 1];
      						
			this.set("contact", obj);
      	},
      	phoneSearch 	: function(){
      		var self = this;

      		this.contactDS.query({
      			filter: { field:"phone", value:this.get("contact").phone }
      		}).then(function(e){
      			var view = self.contactDS.view();
			    self.set("contact", view[0]);
      		});
      	},      	
      	edit 			: function(e){
      		var data = e.data;
      		
      		this.set("stock", data);      		    		

      		var window = $("#stock-window").data("kendoWindow");
          	window.title("ស្តុក");          	
          	window.center().open();
      	},
      	change 			: function(){

      	},
      	cancelChanges 	: function(e){
      		e.preventDefault();

      		this.dataSource.cancelChanges();
      		window.history.back();      		
      	}, 
      	save 			: function(){
      		this.dataSource.sync();
      		window.history.back();
      	},      	
      	delete 			: function(e){
			if (confirm("តើលោកអ្នកពិតជាចង់លុបមែនឬទេ?")) {        
		        var data = e.data;
		        this.dataSource.remove(data);
		        this.dataSource.sync();
	    	}	    	
	    }
    });
    banhji.invoicePrint =  kendo.observable({    	
    	dataSource 	: dataStore(baseUrl + "bills/index"),
    	lineDS 		: dataStore(baseUrl + "bills/line"),
    	
    	bill 		: null,    	  	

    	pageLoad 	: function(id){
    		var self = this;

    		this.dataSource.query({
				filter: { field:"id", value: id }
			}).then(function(e){
				var view = self.dataSource.view();
						    	
		    	self.set("bill", view[0]);
			});

    		this.lineDS.filter({ field:"bill_id", value: id });
    	}    	
    });	

	<!-- //views and layout -->
	banhji.view = {
		layout 		: new kendo.Layout('#layout', {model: banhji.Layout}),
		blank		: new kendo.View('<div></div>'),
		menu 		: new kendo.Layout('#menu-tmpl', {model: banhji.Layout}),
		loginV 		: new kendo.View("#login-tmpl", {model: auth}),
		index  		: new kendo.Layout("#index"),
		myTmpl 		: new kendo.Layout('#my-tmpl'),
		userList 	: new kendo.View('#admin-userList-tmpl', {model: user}),
		newUser 	: new kendo.View('#userList-new-tmpl', {model: user}),
		editUser 	: new kendo.View('#userList-edit-tmpl', {model: user}),
		pwdUser 	: new kendo.View('#userList-password-tmpl', {model: user}),
		adTmpl 		: new kendo.Layout('#admin-tmpl'),	
		
		rInvoicePrint: new kendo.View("#rInvoicePrint", {model: banhji.rInvoicePrint}),
		newProduct: new kendo.View("#newProduct", {model: banhji.newProduct}),
		priceList: new kendo.View("#priceList", {model: banhji.priceList}),
		product: new kendo.View("#product", {model: banhji.product}),
		newStock: new kendo.View("#newStock", {model: banhji.newStock}),
		bill: new kendo.View("#bill", {model: banhji.bill}),
		invoicePrint: new kendo.View("#invoicePrint", {model: banhji.invoicePrint})		
	};

	<!-- //views and layout-->
	banhji.router = new kendo.Router({
		init: function() {
			// banhji.view.layout.render("#wrapperApplication");
			$('#current-section').html('|&nbsp;Company');
			$('#home-menu').addClass('active');
			banhji.view.layout.render("#wrapperApplication");
			if(auth.getLogin() === false) {
				banhji.router.navigate('/login');
			}
		},
		routeMissing: function(e) {
			// banhji.view.layout.showIn("#layout-view", banhji.view.missing);
			console.log("no resource found.")
		}
	});

	/* Login page */
	banhji.router.route('/', function(){
		banhji.view.layout.showIn('#content', banhji.view.index);
	});

	banhji.router.route("/new_product(/:id)", function(id){
		if(!auth.getLogin()){
			banhji.router.navigate('/login');
		}else{
			var vm = banhji.newProduct;
			
			banhji.view.layout.showIn("#content", banhji.view.newProduct);

			vm.pageLoad(id);			
			
			if(banhji.pageLoaded["new_product"]==undefined){
				banhji.pageLoaded["new_product"] = true;

				var validator = $("#example").kendoValidator().data("kendoValidator");
				var notification = $("#notification").kendoNotification({				    
				    autoHideAfter: 5000,
				    width: 300,				    
				    height: 50
				}).data('kendoNotification');

		        $("#save").click(function(e){				
					e.preventDefault();

					if(validator.validate()){
		            	vm.save();

		            	notification.success("កត់ត្រាបានសំរេច");			  
			        }else{
			        	notification.error("សូមត្រួតពិនិត្រឪ្យបានត្រឹមត្រូវម្ដងទៀត");			           
			        }		            
				});
			}	
		}
	});
	banhji.router.route("/price_list/:id", function(id){
		if(!auth.getLogin()){
			banhji.router.navigate('/login');
		}else{
			var vm = banhji.priceList;
			
			banhji.view.layout.showIn("#content", banhji.view.priceList);

			vm.pageLoad(id);			
			
			if(banhji.pageLoaded["price_list"]==undefined){
				banhji.pageLoaded["price_list"] = true;

				
			}	
		}
	});
	banhji.router.route("/products", function(){
		if(!auth.getLogin()){
			banhji.router.navigate('/login');
		}else{
			var vm = banhji.product;
			
			banhji.view.layout.showIn("#content", banhji.view.product);			
			
			if(banhji.pageLoaded["products"]==undefined){
				banhji.pageLoaded["products"] = true;

				vm.contactDS.filter({ field:"contact_type_id", value: 2 });
			}	
		}
	});
	banhji.router.route("/new_stock/:id", function(id){
		if(!auth.getLogin()){
			banhji.router.navigate('/login');
		}else{
			var vm = banhji.newStock;
			banhji.view.layout.showIn("#content", banhji.view.newStock);

			vm.pageLoad(id);			
			
			if(banhji.pageLoaded["new_stock"]==undefined){
				banhji.pageLoaded["new_stock"] = true;

				var validator = $("#example").kendoValidator().data("kendoValidator");
				var notification = $("#notification").kendoNotification({				    
				    autoHideAfter: 5000,
				    width: 300,				    
				    height: 50
				}).data('kendoNotification');

		        $("#save").click(function(e){				
					e.preventDefault();

					if(validator.validate()){
		            	vm.save();

		            	notification.success("កត់ត្រាបានសំរេច");			  
			        }else{
			        	notification.error("សូមត្រួតពិនិត្រឪ្យបានត្រឹមត្រូវម្ដងទៀត");			           
			        }		            
				});	            
			}	
		}
	});
	banhji.router.route("/bills(/:id)", function(id){
		if(!auth.getLogin()){
			banhji.router.navigate('/login');
		}else{
			var vm = banhji.bill;
			banhji.view.layout.showIn("#content", banhji.view.bill);

			vm.pageLoad(id);

			if(banhji.pageLoaded["bills"]==undefined){
				banhji.pageLoaded["bills"] = true;

				var validator = $("#example").kendoValidator().data("kendoValidator");
				var notification = $("#notification").kendoNotification({				    
				    autoHideAfter: 5000,
				    width: 300,				    
				    height: 50
				}).data('kendoNotification');

		        $("#save").click(function(e){				
					e.preventDefault();

					if(validator.validate()){
		            	vm.save();

		            	notification.success("កត់ត្រាបានសំរេច");			  
			        }else{
			        	notification.error("សូមត្រួតពិនិត្រឪ្យបានត្រឹមត្រូវម្ដងទៀត");			           
			        }		            
				});				
			}								
		}
	});	
	banhji.router.route("/invoice_print(/:id)", function(id){
		if(!auth.getLogin()){
			banhji.router.navigate('/login');
		}else{
			var vm = banhji.invoicePrint;
			banhji.view.layout.showIn("#content", banhji.view.invoicePrint);

			vm.pageLoad(id);					
		}
	});
	banhji.router.route("/rInvoice_print", function(){
		if(!auth.getLogin()){
			banhji.router.navigate('/login');
		}else{
			banhji.view.layout.showIn("#content", banhji.view.rInvoicePrint);
			kendo.fx($("#slide-form")).slideIn("down").play();			
		}
	});


	banhji.router.route('/login', function() {
		banhji.view.layout.showIn('#content', banhji.view.loginV);
	});

	banhji.router.route('/admin', function(){
		if(!auth.getLogin()) {
			banhji.router.navigate('/login');
		} else {
			banhji.view.layout.showIn('#content', banhji.view.adTmpl);
		}
	});

	banhji.router.route('/userList', function(){
		if(!auth.getLogin()) {
			banhji.router.navigate('/login');
		} else {
			user.dataStore.cancelChanges();

			banhji.view.layout.showIn('#content', banhji.view.adTmpl);
			banhji.view.adTmpl.showIn('#myContainer', banhji.view.userList);
		}
	});

	banhji.router.route('/userList/new', function(){
		if(!auth.getLogin()) {
			banhji.router.navigate('/login');
		} else {
			user.dataStore.insert(0,{
				username: "",
				password: "",
				status: true,
				created_at: new Date(),
				updated_at: new Date()
			});
			user.set('current', user.dataStore.at(0));
			if(user.get('current').isNew()) {
				console.log('New');
			}
			banhji.view.layout.showIn('#content', banhji.view.adTmpl);
			banhji.view.adTmpl.showIn('#myContainer', banhji.view.newUser);
		}
	});

	banhji.router.route('/userList/:id/edit', function(id){
		user.dataStore.cancelChanges();
		if(!auth.getLogin()) {
			banhji.router.navigate('/login');
		} else {
			var model = user.dataStore.get(id);
			if (model === undefined) {
				user.dataStore.query({
					filter: {field: 'id', value: id}
				}).then(function(e){
					user.set('current', user.dataStore.get(id));
				});
			} else {
				user.set('current', model);
			}
			banhji.view.layout.showIn('#content', banhji.view.adTmpl);
			banhji.view.adTmpl.showIn('#myContainer', banhji.view.editUser);
		}
	});

	banhji.router.route('/userList/:id/changePassword', function(id){
		user.dataStore.cancelChanges();
		if(!auth.getLogin()) {
			banhji.router.navigate('/login');
		} else {
			var model = user.dataStore.get(id);
			if (model === undefined) {
				user.dataStore.query({
					filter: {field: 'id', value: id}
				}).then(function(e){
					user.set('current', user.dataStore.get(id));
				});
			} else {
				user.set('current', model);
			}
			banhji.view.layout.showIn('#content', banhji.view.adTmpl);
			banhji.view.adTmpl.showIn('#myContainer', banhji.view.pwdUser);
		}
	});

	banhji.router.route('/admin/companyList', function(){
		if(!auth.getLogin()) {
			banhji.router.navigate('/login');
		} else {
			user.dataStore.cancelChanges();

			banhji.view.layout.showIn('#content', banhji.view.adTmpl);
			banhji.view.adTmpl.showIn('#myContainer', banhji.view.userList);
		}
	});

	banhji.router.route('/admin/companyList/new', function(){
		if(!auth.getLogin()) {
			banhji.router.navigate('/login');
		} else {
			user.dataStore.insert(0,{
				username: "",
				password: "",
				status: true
			});
			user.set('current', user.dataStore.at(0));
			if(user.get('current').isNew()) {
				console.log('New');
			}
			banhji.view.layout.showIn('#content', banhji.view.adTmpl);
			banhji.view.adTmpl.showIn('#myContainer', banhji.view.newUser);
		}
	});

	banhji.router.route('/admin/companyList/:id/edit', function(id){
		user.dataStore.cancelChanges();
		if(!auth.getLogin()) {
			banhji.router.navigate('/login');
		} else {
			var model = user.dataStore.get(id);
			if (model === undefined) {
				user.dataStore.query({
					filter: {field: 'id', value: id}
				}).then(function(e){
					user.set('current', user.dataStore.get(id));
				});
			} else {
				user.set('current', model);
			}
			banhji.view.layout.showIn('#content', banhji.view.adTmpl);
			banhji.view.adTmpl.showIn('#myContainer', banhji.view.editUser);
		}
	});	

	banhji.router.route('/my', function(){
		// for managing current logged in user
		if(!auth.getLogin()) {
			banhji.router.navigate('/login');
		} else {
			banhji.view.layout.showIn('#content', banhji.view.myTmpl);
		}		
	});
	// user management
	banhji.router.route('/userManagement', function(){});

	banhji.router.route('/userManagement/:id/update', function(id){});

	banhji.router.route('/userManagement/:id/chagne_password', function(){});

	banhji.router.route('/userManagement/new', function(){});

	banhji.router.route('/role', function(){});

	banhji.router.route('/role/:id/update', function(){});

	banhji.router.route('/role/new', function(){});

	
	$(function() {	
		if(!getDB()) {
			console.log('please user \"entity=company\"');
		} else {
			banhji.router.start();
		}
	});
</script>
