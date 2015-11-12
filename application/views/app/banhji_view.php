<div id="wrapperApplication" class="container-fluid"></div>

<!-- template section starts -->
<script type="text/x-kendo-template" id="layout">
	<div id="menu-barr"></div>				
	<div id="content" class="row-fluid"></div>
</script>
<script type="text/x-kendo-template" id="menu-tmpl">
    <div class="navbar navbar-inverse hidden-print">
	  	<div class="navbar-inner">
		    <a class="brand" href="#/">ROS SOCHEAT</a>
		    <ul class="nav">
		      	<li class="active"><a href="#/sale_center">គេហទំព័រ</a></li>
		      	<li><a href="#/contact_center">អតិថិជន</a></li>
		      	<li><a href="#/products">ទំនិញ</a></li>
		      	<li><a href="#/bills">វិក្កយបត្រ</a></li>		      	
		      	<li><a href="#/sale_summary">របាយការណ៍</a></li>		      	
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
				<a href="#/sale_center">
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


<!-- //Lina Start ============================================= -->
<script id="saleCenter" type="text/x-kendo-template">
	<div class="row-fluid">	
		<div class="span12">
			<div id="example" class="k-content">
				<br>
				<div class="row-fluid">
					<div class="span3" data-bind="click: loadOpenBill" style="color: white; font-size: 20px; background-color:Purple; border:0px solid black; padding: 10px;">
						វិក្កយបត្រទិញចូល
						<br><br>
						<span data-bind="text: totalBill" ></span>
						<span style="font-size: 14px">មិនទាន់ទូទាត់</span>
					</div>
					
					<div class="span3" data-bind="click: loadOpenSO" style="color: white; font-size: 20px; background-color:MediumSeaGreen; border:0px solid black; padding: 10px;">
						បញ្ជាលក់
						<br><br>
						<span data-bind="text: totalSO" ></span>
						<span style="font-size: 14px">មិនទាន់រៀបចំ</span>
					</div>

					<div class="span3" data-bind="click: loadOpenInvoice" style="color: white; font-size: 20px; background-color:Orange; border:0px solid black; padding: 10px;">
						វិក្កយបត្រ
						<br><br>
						<span data-bind="text: totalOpenInvoice" ></span>
						<span style="font-size: 14px">មិនទាន់ទូទាត់</span>
					</div>

					<div class="span3" data-bind="click: loadMinProduct" style="color: white; font-size: 20px; background-color:Crimson; border:0px solid black; padding: 10px;">
						ទំនិញត្រូវកម្ម៉ង់
						<br><br>
						<span data-bind="text: totalMinProduct" ></span>
						<span style="font-size: 14px">មុខទំនិញ</span>
					</div>		          	
	          	</div>

	          	<br>

	          	<div class="row">
	          		<div class="span6">
						
					</div>
					<div class="span6">
						<div class="innerAll padding-bottom-none-phone">
							<a href="" class="widget-stats widget-stats-primary widget-stats-4">
								<span class="txt">សមតុល្យសរុប</span>
								<span class="count" style="font-size: 35px;" data-bind="text: balance"></span>
								<span class="glyphicons coins"><i></i></span>
								<div class="clearfix"></div>
								<i class="icon-play-circle"></i>
							</a>
						</div>
					</div>										
				</div>

	          	<br>

				<input id="dateSorter" />
				<input id="startDate" placeHolder="ថ្ងៃទី" />
				<input id="endDate" placeHolder="ដល់" />
				<input id="ddlContact" data-bind="value: contact_id" style="width: 250px;" />
				<input id="ddlBillType" style="width: 200px" />
				<button id="search" type="button" class="btn btn-default"><i class="icon-search"></i></button>
				<button type="button"  class="btn btn-default" data-bind="click: refresh"><i class="icon-refresh"></i></button>
				|
				ចំនួន <span data-bind="text: totalCount"></span>						

	          	<br>				

				<div data-role="grid" 
					data-bind="source: dataSource"					
					data-auto-bind="false"
					data-pageable="true"				    	        
				    data-row-template="sale-center-row-template"						                           
				    data-columns='[			    			
			       		{ title: "កាលបរិច្ឆេទ" },
			           	{ title: "ឈ្មោះ" },
			           	{ title: "ប្រភេទ" },					           
			           	{ title: "លេខកូដ" },
			           	{ title: "ទឹកប្រាក់" },	            
			           	{ title: "ស្ថានភាព" },
			           	{ title: "ធ្វើការ" }                   	                    
				    ]'></div>				
			</div><!-- //End div example-->
		</div><!-- //End div span12-->
	</div><!-- //End div row-fluid-->	
</script>
<script id="sale-center-row-template" type="text/x-kendo-tmpl">
    <tr>        
        <td>#=kendo.toString(new Date(issued_date), "dd-MM-yyyy")#</td>
        <td>
        	#if(contact_id>0){#
        		#if(contact[0].contact_type_id==3 || contact[0].contact_type_id==5){#
        			<a href="\#/contact/#=contact_id#"><i></i>#=contact[0].company#</a>
        		#}else{#        			
        			<a href="\#/contact/#=contact_id#"><i></i>#=contact[0].surname# #=contact[0].name#</a>
        		#}#
        	#}#        	
        </td>       
        <td>
        	#if(type==="invoice"){#
        		វិក្កយបត្រ	       	        		
			#}else if(type==="receipt"){#
        		បង្កាន់ដៃលក់
        	#}else if(type==="so"){#
        		បញ្ជាលក់
        	#}else if(type==="estimate"){#        		
        		សម្រង់តម្លៃ        	
        	#}else if(type==="bill"){#
        		<span class="label label-warning">វិក្កយបត្រទិញ</span>
        	#}else if(type==="po"){#
        		បញ្ជាទិញ
        	#}else if(type==="expense"){#
        		<span class="label label-important">ចំណាយ</span>
        	#}else if(type==="income"){#
        		<span class="label label-success">ចំណូល</span>
        	#}else if(type==="invest"){#
        		វិនិយោគ
        	#}else if(type==="witdraw"){#
        		ដកប្រាក់
        	#}else if(type==="salary"){#
        		ប្រាក់ខែ
        	#}else{#
        		#=type#
        	#}#
        </td>
        <td>
        	<a href="\#/bills/#=id#"><i></i> #=number#</a>
        </td>
        <td align="right">#:kendo.toString(amount, "c")#</td>
        <td>        	
        	#if(type==="invoice" || type==="bill"){#
        		#if(status==="0" || status==="2") {#
        			# var date = new Date(), dueDate = new Date(due_date).getTime(), toDay = new Date(date).getTime(); #
					#if(dueDate < toDay) {#
						# var overDue = Math.floor((toDay - dueDate)/(1000*60*60*24))#
						#if(overDue==0){#
							<span class="label label-warning">ត្រូវទូទាត់ថ្ងៃនេះ</span>
						#}else{#
							<span class="label label-important">លើសកំណត់ #:overDue# ថ្ងៃ</span>
						#}#						
					#} else {#
						#:Math.floor((dueDate - toDay)/(1000*60*60*24))# ថ្ងៃនឹងត្រូវទូទាត់
					#}#
				#} else {#
					<span class="label label-success">ទូទាត់រួច</span>
				#}#
        	#}else if(type==="so"){#
        		#if(status==="0"){#
        			មិនទាន់រៀបចំ
        		#}else{#
        			រៀបចំរូច        			
        		#}#
        	#}else if(type==="estimate"){#        		
        		#if(status==="0"){#
        			មិនទាន់យល់ព្រម
        		#}else{#
        			យល់ព្រម        			
        		#}#
        	#}#			
		</td> 
		<td align="center">
			#if(type==="invoice"){#
				#if(status==="0" || status==="2"){#					
					<a href="\#/payments/#=id#"><i></i> ទទួលប្រាក់</a>
				#}#			
			#}else if(type==="bill"){#
        		#if(status==="0" || status==="2"){#					
					<a href="\#/payments/#=id#"><i></i> បង់ប្រាក់</a>
				#}#	
        	#}else if(type==="so"){#        		
        		#if(status==="0"){#
        			
        		#}#
        	#}else if(type==="estimate"){#        		
        		#if(status==="0"){#
        			
        		#}#
        	#}else{#

        	#}#
		</td>        
   	</tr>
</script>

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
								<input type="text" class="k-textbox" 
										data-bind="value: product.sku"
										style="width: 100%" />
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

						<span id="save" class="btn btn-success btn-icon glyphicons ok_2"><i></i>រក្សាទុក</span>
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
				                		ចំនួន: <span data-bind="text: product.on_hand"></span> 
				                		<span data-bind="text: product.unit"></span> <br>		                		
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

					<span class="btn btn-success btn-icon glyphicons ok_2" data-bind="click: save"><i></i>រក្សាទុក</span>
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
			            	<th>កាលបរិច្ឆេទ</th>
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
    	<td>#=kendo.toString(price, "c", currency[0].locale)#</td>    	
    	<td>#=unit_value#</td>
    	<td>#=unit#</td>    	
    	<td>
    		<span data-bind="click: edit"><i class="icon-edit"></i> កែ</span>
    		|
    		<span data-bind="click: delete"><i class="icon-remove"></i> លុប</span>
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
    	<td>#=unit#</td>    	
    	<td>#=kendo.toString(price, "c", currency[0].locale)#</td>    	
    </tr>
</script>

<script id="contactCenter" type="text/x-kendo-template">	
	<div class="row-fluid">		    
		<div class="span12">			
			<div id="example" class="k-content">				
				<span class="pull-right glyphicons no-js remove_2" 
					onclick="javascript:window.history.back()" data-bind="click: cancel"><i></i></span>
				
				<h3>អតិថិជន</h3>

				<div class="box-generic">
					<input class="k-textbox" data-bind="value: txtSearch" />
					ស្វែងរកតាម
					<input data-role="dropdownlist"
		            		data-value-primitive="true"				                    
		                    data-text-field="name"
		                    data-value-field="id"
		                    data-bind="value: fieldSearch,
		                              source: fieldList"
		                    style="width: 200px;" />
		            ​
		            | ប្រភេទអតិថិជន
		            <input data-role="dropdownlist"
		            		data-value-primitive="true"
		            		data-auto-bind="true"				                    
		                    data-text-field="name"
		                    data-value-field="id"
		                    data-bind="value: contactTypeID,
		                              source: contactTypeDS"
		                    data-option-label="(--- ជ្រើសរើស ---)"
		                    style="width: 200px;" />
		                   
		            <button class="btn" type="button" data-bind="click: search"><i class="icon-search"></i></button>
		            |
		            <button class="btn" type="button" data-bind="click: newContact"><i class="icon-plus"></i> អតិថិជនថ្មី</button>
				</div>

				<div data-role="grid" 
					data-bind="source: dataSource"
					data-pageable="true"									    	        
				    data-row-template="contact-center-row-template"						                           
				    data-columns='[			    			
			       		{ title: "លេខកូដ" },
			           	{ title: "ឈ្មោះ" },
			           	{ title: "សំគាល់" },			           	
			           	{ title: "លេខទូរសព្ទ័" },
			           	{ title: "ប្រភេទ" },
			           	{ title: "សមតុល្យ" },	            
			           	{ title: "", width: 120 }                   	                    
				    ]'></div>	

			</div> <!-- // End div example-->  
		</div> <!-- // End div span12-->			
	</div> <!-- // End div row-fluid-->	
</script>
<script id="contact-center-row-template" type="text/x-kendo-tmpl">
    <tr>
		<td>#=number#</td>
		<td>#=fullname#</td>
		<td>#=memo#</td>
		<td>#=phone#</td>
		<td>#=contact_type[0]==null?"":contact_type[0].name#</td>
		<td align="right">#=kendo.toString(balance, "c")#</td>
		<td>
			<a href="\#/contact/#=id#" class="btn-action glyphicons eye_open btn-default"><i></i></a>
			<span class="btn-action glyphicons usd btn-success" data-bind="click: goBill"><i></i></span>
			<span class="btn-action glyphicons dashboard btn-inverse" data-bind="click: goAllBill"><i></i></span>
		</td>		
	</tr>     	
</script>
<script id="contact" type="text/x-kendo-template">
	<div class="container-960">
		<div class="row-fluid">		    
			<div class="span12">			
				<div id="example" class="k-content">
					<div class="box-generic">
						<span class="pull-right glyphicons no-js remove_2" 
							onclick="javascript:window.history.back()" data-bind="click: cancel"><i></i></span>
						
						<h3>អតិថិជន</h3>	
						<br>										
						<div class="row-fluid">													
							<div class="span3">											
								<label for="customerType">ប្រភេទអតិថិជន <span style="color:red">*</span></label>
								<input id="customerType" name="customerType"
					            		data-role="dropdownlist"
					            		data-value-primitive="true"				                    
					                    data-text-field="name"
					                    data-value-field="id"
					                    data-bind="value: contact.contact_type_id,
					                              source: contactTypeDS"
					                    data-option-label="(--- ជ្រើសរើស ---)"
					                    required data-required-msg="ត្រូវការ ប្រភេទអតិថិជន" style="width: 200px;" />														            
							</div>
							<div class="span3">						
					            <label for="currency">រូបិយ​ប័ណ្ណ <span style="color:red">*</span></label>
					            <input id="currency" name="currency"
					            		data-role="dropdownlist"
					            		data-value-primitive="true"				                    
					                    data-text-field="code"
					                    data-value-field="id"
					                    data-bind="value: contact.currency_id,
					                              source: currencyDS"
					                    data-option-label="(--- ជ្រើសរើស ---)"
					                    required data-required-msg="ត្រូវការ រូបិយ​ប័ណ្ណ" style="width: 200px;" />				            				            
					        </div>
							<div class="span3">
								<label for="customerStatus">ស្ថានភាព <span style="color:red">*</span></label>							              	
			              		<input id="customerStatus" name="customerStatus" data-role="dropdownlist"
				            		data-text-field="name"
	           						data-value-field="id"
	           						data-value-primitive="true" 
				            		data-bind="source: statusList, value: contact.status"					            							            		
				            		data-option-label="(--- ជ្រើសរើស ---)"
				            		required data-required-msg="ត្រូវការ ស្ថានភាព" style="width: 200px;" />							              	
							</div>								
							<div class="span3">
								<label for="registered_date">ថ្ងៃចុះឈ្មោះ <span style="color:red">*</span></label>
					            <input id="registered_date" name="registered_date" 
					            		data-role="datepicker"			            		
		            					data-bind="value: contact.registered_date" 
		            					data-format="dd-MM-yyyy"
		            					data-parse-formats="yyyy-MM-dd" 
		            					placeholder="ថ្ងែ-ខែ-ឆ្នាំ" required data-required-msg="ត្រូវការ ថ្ងៃចុះឈ្មោះ" style="width: 200px;" />
							</div>																						
						</div>						

						<br>
						<div class="separator line bottom"></div>

						<div class="row-fluid">							
							<div class="span3">
								<label for="surname">គោត្តនាម </label>
			              		<input id="surname" name="surname" class="k-textbox" data-bind="value: contact.surname" 
					              		placeholder="ត្រកូល"
					              		style="width: 200px;" />
							</div>
							<div class="span3">							
								<label for="name">នាម <span style="color:red">*</span></label>
					            <input id="name" name="name" class="k-textbox" data-bind="value: contact.name" 
					              		placeholder="ឈ្មោះ" required data-required-msg="ត្រូវការ នាម"
					              		style="width: 200px;" />
							</div>
							<div class="span3">
								<label for="companyName">ក្រុមហ៊ុន </label>
								<input class="k-textbox" data-bind="value: contact.company"									
										placeholder="e.g. PCG & Partner"
										style="width: 200px;" />	
							</div>
							<div class="span3">						
								<label for="number">លេខកូដ</label>
		              			<input id="number" name="number" class="k-textbox"
			              				data-bind="value: contact.number" 
			              				placeholder="e.g. AB0001" style="width: 200px;" />		              		
							</div>										
						</div>

						<br>
						<div class="separator line bottom"></div>

						<div class="row-fluid">					
							<div class="span3">						
								<label for="phone">លេខទូរសព្ទ័</label>
		              			<input id="phone" name="phone" class="k-textbox"
			              				data-bind="value: contact.phone" 
			              				placeholder="e.g. 012333444" style="width: 200px;" />		              		
							</div>
							<div class="span3">						
								<label for="gender">ភេទ</label>
		              			<select data-role="dropdownlist" 
		              					data-bind="source: genders, value: contact.gender"
		              					style="width: 200px;"></select>		              		
							</div>
							<div class="span3">						
								<label for="address">អាស័យដ្ឋាន</label>
		              			<input class="k-textbox" data-bind="value: contact.address" style="width: 200px;" />	              		
							</div>
							<div class="span3">						
								<label for="memo">សំគាល់</label>
		              			<input class="k-textbox" data-bind="value: contact.memo" style="width: 200px;" />	              		
							</div>											
						</div>

						<br>
						<div class="separator line bottom"></div>
						
						<!-- //Form actions -->
						<div align="center">
							<span id="notification"></span>

							<span id="save" class="btn btn-success btn-icon glyphicons ok_2"><i></i>រក្សាទុក</span>
							<span class="btn btn-danger btn-icon glyphicons delete" data-bind="click: delete, visible: isEdit"><i></i>លុប</span>
							<span class="btn btn-inverse btn-icon glyphicons remove_2" data-bind="click: cancel"><i></i>បិទ</span>
						</div>
					</div>
					<!-- // Form actions END -->							
				</div> <!-- // End div example-->  
			</div> <!-- // End div span12-->
		</div>		
	</div> <!-- // End div row-fluid-->	
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
		            <li class="glyphicons shopping_cart"><a href="#/bills"><i></i> រទេះទំនិញ (<span data-bind="text: countItem"></span>) </a>
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
		                 data-bind="source: vendorDS, events:{ change: vendorChanges}"></div>
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
	                <th>លក់</th>	                
	                <th></th>
	            </tr>
	        </thead>
	        <tbody data-template="product-template"
	        	data-pageable="true" 
	        	data-bind="source: dataSource"></tbody>
	    </table>
	    <div id="pager" class="k-pager-wrap"
	    	 data-auto-bind="false"
             data-role="pager" data-bind="source: dataSource"></div>

        <div id="cart-window" data-role="window" data-visible="false" data-modal="true" data-resizable="false" data-iframe="true">				    	
			<table class="table table-striped">
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
							<input type="text" class="k-textbox" data-bind="value: description" />
						</td>
						<td>
							<input data-role="numerictextbox" 
									data-format="n4" data-decimals="4" data-min="0"
									data-bind="value: quantity, events: {change : onChange}" />

							<input data-role="dropdownlist"                   
				                   data-text-field="unit"
				                   data-value-field="unit_id"
				                   data-value-primitive="true"
				                   data-bind="value: unit_id,
				                              source: priceList, 
				                              events: {change : priceChanges}" 
				                              style="width: 100px;" />
						</td>				
						<td>							
							<input data-role="numerictextbox" 
									data-format="c4" data-decimals="4" data-min="0"
									data-bind="value: price, events: {change : onChange}" />

							<input data-role="dropdownlist"                   
				                   data-text-field="code"
				                   data-value-field="id"
				                   data-bind="value: currency_id,
				                              source: currencyDS,
				                              events: {change : currencyChanges}"
				                              style="width: 60px;" />
						</td>		
						<td align="right">			
							<span class="middle strong" data-bind="text: amount"></span>			
						</td>					
					</tr>
				</tbody>
			</table>			

			<div align="right">
				<span class="btn btn-success btn-icon glyphicons shopping_cart" data-bind="click: addToCart"><i></i>ដាក់ចូលរទេះ</span>
				<span class="btn btn-danger btn-icon glyphicons remove_2" data-bind="click: closeWindow"><i></i>បិទ</span>  
			</div>

			<br>
		</div>

	</div>
</script>
<script id="product-template" type="text/x-kendo-template">
    <tr>
    	<td>#=sku#</td>
    	<td>#=name#</td>
    	<td>#=description#</td>
    	<td>
    		#if(on_hand<=order_point){#    		
    			<span class="badge badge-danger">#=kendo.toString(on_hand, "n0")#</span>
    		#}else{#
    			<span class="badge badge-info">#=kendo.toString(on_hand, "n0")#</span>
    		#}#

    		#=unit==null?"":unit#
    	</td>    	
    	<td>
    		#for(var i=0; i<price_lists.length; i++) {#
    			#if(price_lists[i].price>0){#
    				<span class="badge badge-inverse"> #=kendo.toString(price_lists[i].price, "c", price_lists[i].locale)# </span> / #=price_lists[i].unit# 
    			#}else{#
    				<span class="badge badge-danger"> #=kendo.toString(price_lists[i].price, "c", price_lists[i].locale)# </span> / #=price_lists[i].unit#
    			#}#
    			<br>    			    						 
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
							<td>កាលបរិច្ឆេទ</td>
							<td>
								<input id="issuedDate" name="issuedDate"
									data-role="datepicker"
									data-format="dd-MM-yyyy"									
				                    data-bind="value: stock.issued_date"
				                   style="width: 100%"
				                   required data-required-msg="ត្រូវការ កាលបរិច្ឆេទ">
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

						<span id="save" class="btn btn-success btn-icon glyphicons ok_2"><i></i>រក្សាទុក</span>
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
			<br>
			<div class="box-generic">
				<span class="pull-right glyphicons no-js remove_2" 
						onclick="javascript:window.history.back();"><i></i></span>				

				<h3>រទេះទំនិញ</h3>

				<div class="box-generic">
					ស្វែងរក
					<input id="ddlCustomer" data-bind="value: name" style="width: 250px;" />
					<button class="btn" type="button" data-bind="click: removeSearch"><i class="icon-remove"></i></button>							
					|							
				  	<input class="k-textbox" data-bind="value: phone, events: {change : phoneSearch}" placeholder="ទូរស័ព្ទ..." autofocus />
				  	<button class="btn" type="button" data-bind="click: phoneSearch"><i class="icon-search"></i></button>							  	
				</div>

				<table class="table table-borderless table-condensed">					
					<tr>
						<td>អតិថិជន</td>
						<td>
							<input class="k-textbox" type="text" data-bind="value: contact.name" style="width: 100%;" />					
						</td>
						<td>ប្រភេទ</td>
						<td>
							<input data-role="dropdownlist"				                   
				                   data-value-primitive="true"
				                   data-text-field="name"
				                   data-value-field="id"
				                   data-bind="value: bill.type,
				                              source: typeList"
				                   style="width: 100%;" />
						</td>
					</tr>
			    	<tr>
			    		<td>ទូរស័ព្ទ</td>
			    		<td>
			    			<input class="k-textbox" type="text" 
			    					data-bind="value: contact.phone"
			    					style="width: 100%;" />
			    		</td>
			    		<td>លេខ</td>
						<td>
							<input type="text" class="k-textbox" data-bind="value: bill.number" style="width: 100%;" />
						</td>			    						
			    	</tr>
			    	<tr>
			    		<td>អាស័យដ្ឋាន</td>			    		
			    		<td>
			    			<input type="text" class="k-textbox" style="width:100%" data-bind="value: bill.address" />
			    		</td>
			    		<td>ថ្ងៃចេញវិក្កបត្រ</td>
						<td>
							<input id="issuedDate" name="issuedDate"
									data-role="datepicker"
									data-format="dd-MM-yyyy"
									data-parse-formats: "yyyy-MM-dd"									
				                    data-bind="value: bill.issued_date"
				                    style="width: 100%"
				                    required data-required-msg="ត្រូវការ ថ្ងៃចេញវិក្កបត្រ" />
						</td>			    					    		
			    	</tr>
			    	<tr>			    		
			    		<td>សំគាល់</td>
			    		<td>
			    			<input type="text" class="k-textbox" style="width:100%" data-bind="value: bill.memo" />
			    		</td>
			    		<td>ថ្ងៃផុតកំណត់</td>
						<td>
							<input id="dueDate" name="dueDate"
									data-role="datepicker"
									data-format="dd-MM-yyyy"
									data-parse-formats: "yyyy-MM-dd"																		
				                    data-bind="value: bill.due_date"
				                    style="width: 100%"
				                    required data-required-msg="ត្រូវការ ថ្ងៃផុតកំណត់" />
						</td>
			    	</tr>
			    </table>		    	
		    	
		    	<span class="glyphicons no-js circle_plus" data-bind="click: addRow"><i></i></span>
		    	<a href="#/products" class="glyphicons no-js shopping_cart"><i></i></a>
		    	<br><br>

		    	<div data-role="grid" 
					data-bind="source: lineDS"
				    data-auto-bind="false"	        
				    data-row-template="bill-row-template"						                           
				    data-columns='[			    			
			       		{ title: "ល.រ <br> No", width: 50 },
			           	{ title: "មុខទំនិញ <br> Items" },				           
			           	{ title: "ចំនួន <br> Qty" },
			           	{ title: "តំលៃ <br> Price" },	            
			           	{ title: "សរុប <br> Amount", width: 100 }                   	                    
				    ]'></div>			   

			    <table class="pull-left">
			    	<tr>
			    		<td>អត្រាប្ដូរប្រាក់ ​1 USD</td>
			    		<td>
			    			<input data-role="numerictextbox"
								data-format="c0" data-min="0" data-culture="km-KH"
								data-bind="value: bill.rate, events: {change : onChange}" />
			    		</td>
			    	</tr>
			    	<tr>
			    		<td>បង់ប្រាក់ ​USD</td>
			    		<td>
			    			<input data-role="numerictextbox" 
								data-format="c4" data-decimals="4" data-min="0"
								data-bind="value: bill.paid_usd, events: {change : onChange}" />
			    		</td>
			    	</tr>
			    	<tr>
			    		<td>បង់ប្រាក់ KHR</td>
			    		<td>
			    			<input data-role="numerictextbox" 
								data-format="c0" data-min="0" data-culture="km-KH"
								data-bind="value: bill.paid_khr, events: {change : onChange}" />
			    		</td>
			    	</tr>
			    	<tr>
			    		<td><span class="label label-success">ប្រាក់អាប់ USD</span></td>
			    		<td>
			    			<input data-role="numerictextbox" 
								data-format="c4" data-decimals="4" readonly
								data-bind="value: bill.changes" />
			    		</td>
			    	</tr>
			    	<tr>
			    		<td><span class="label label-inverse">ប្រាក់អាប់ KHR</span></td>
			    		<td>
			    			<input data-role="numerictextbox" 
								data-format="c0" readonly
								data-culture="km-KH"
								data-bind="value: changes_khr" />
			    		</td>
			    	</tr>
			    </table>
					
				<table class="pull-right">											
					<tr>
						<td>សរុបរង USD</td>
						<td>
							<input data-role="numerictextbox"
								data-format="c4" data-decimals="4" data-min="0" readonly
								data-bind="value: sub_total" />
						</td>
					</tr>
					<tr>
						<td>ពិន័យ USD</td>
						<td>
							<input data-role="numerictextbox" 
								data-format="c4" data-decimals="4" data-min="0"
								data-bind="value: bill.fine, events: {change : onChange}" />
						</td>
					</tr>
					<tr>
						<td>បញ្ចះុតំលៃ USD</td>
						<td>
							<input data-role="numerictextbox" 
								data-format="c4" data-decimals="4" data-min="0"
								data-bind="value: bill.discount, events: {change : onChange}" />
						</td>
					</tr>
					<tr>
						<td><span class="label label-success">សរុប USD</span></td>
						<td>
							<input data-role="numerictextbox"
								data-format="c4" data-decimals="4" readonly
								data-bind="value: bill.amount" />
						</td>
					</tr>					
					<tr>					
						<td><span class="label label-inverse">សរុប KHR</span></td>
						<td>
							<input data-role="numerictextbox" 
								data-format="c0" readonly
								data-culture="km-KH"
								data-bind="value: amount_khr" />
						</td>
					</tr>					
				</table>
				
				<div align="center" style="clear: both;">
					<span id="notification"></span>

					<span id="save" class="btn btn-success btn-icon glyphicons ok_2"><i></i>រក្សាទុក</span>
					<span class="btn btn-danger btn-icon glyphicons delete" data-bind="click: delete, visible: isEdit"><i></i>លុប</span>
					<span class="btn btn-info btn-icon glyphicons print" data-bind="click: print, visible: isEdit"><i></i>បោះពុម្ព</span>
					<span class="btn btn-inverse btn-icon glyphicons remove_2" data-bind="click: cancelChanges"><i></i>បិទ</span>
				</div>			
			</div>
		</div>
	</div>
</script>
<script id="bill-row-template" type="text/x-kendo-tmpl">
    <tr>
		<td class="center">
			<i class="icon-trash" data-bind="click: removeRow"></i>
			<span class="sno"></span>
		</td>
		<td>
			<input type="text" class="k-textbox" data-bind="value: description" style="width: 100%;" />
		</td>
		<td>
			<input data-role="numerictextbox" 
					data-format="n4" data-decimals="4" data-min="0"
					data-bind="value: quantity, events: {change : onChange}" style="width: 100px;" />
			<input data-role="dropdownlist"
				   data-option-label="(---រើស---)"                   
                   data-text-field="unit"
                   data-value-field="unit_id"
                   data-bind="value: unit_id,
                              source: priceList,
                              events: {change : unitChanges}"
                   style="width: 100px;" />
		</td>				
		<td>
			<input data-role="numerictextbox" 
					data-format="n4" data-decimals="4" data-min="0"
					data-bind="value: price, events: {change : onChange}" style="width: 100px;" />
			<input data-role="dropdownlist"                   
                   data-text-field="code"
                   data-value-field="id"
                   data-bind="value: currency_id,
                              source: currencyList"
                              style="width: 60px;" />
		</td>		
		<td align="right">			
			#amount = kendo.parseFloat(quantity)*kendo.parseFloat(price)#
			#if(currency_id==2){#
				#=kendo.toString(amount, "c0", "km-KH")#
			#}else{#
				#=kendo.toString(amount, "c4")#
			#}#	
		</td>					
	</tr>     	
</script>

<script id="payment" type="text/x-kendo-template">
	<div class="container-960">		
		<div id="example" class="k-content">		
			<span class="pull-right glyphicons no-js remove_2" 
						onclick="javascript:window.history.back();"><i></i></span>				

			<h3>បង់ប្រាក់</h3>

			<table class="table table-bordered table-condensed">
				<tr>
					<td>ឈ្មោះ</td>
					<td>
						<span data-bind="text: contact.fullIdName"></span>
					</td>
					<td class="right">លេខវិក្កយបត្រ</td>
					<td>
						<span data-bind="text: obj.number"></span>
					</td>
					<td class="right">ថ្ងៃបង់ប្រាក់</td>
					<td>
						 <input data-role="datepicker"			            		
        					data-bind="value: obj.paid_date" 
        					data-format="dd-MM-yyyy"
        					data-parse-formats="yyyy-MM-dd" 
        					placeholder="ថ្ងែ-ខែ-ឆ្នាំ" 
        					required data-required-msg="ត្រូវការ ថ្ងៃបង់ប្រាក់" 
        					style="width: 200px;" />							
					</td>
				</tr>
			</table>					

			<table class="pull-left">
		    	<tr>
		    		<td>អត្រាប្ដូរប្រាក់ ​1 USD</td>
		    		<td>
		    			<input data-role="numerictextbox"
							data-format="c0" data-min="0" data-culture="km-KH"
							data-bind="value: obj.rate, events: {change : onChange}" />
		    		</td>
		    	</tr>
		    	<tr>
		    		<td>បង់ប្រាក់ ​USD</td>
		    		<td>
		    			<input data-role="numerictextbox" 
							data-format="c4" data-decimals="4" data-min="0"
							data-bind="value: obj.paid_usd, events: {change : onChange}" />

						<span class="btn btn-default btn-icon glyphicons thumbs_up" data-bind="click: payAll"><i></i> បង់</span>					
		    		</td>
		    	</tr>
		    	<tr>
		    		<td>បង់ប្រាក់ KHR</td>
		    		<td>
		    			<input data-role="numerictextbox" 
							data-format="c0" data-min="0" data-culture="km-KH"
							data-bind="value: obj.paid_khr, events: {change : onChange}" />
		    		</td>
		    	</tr>
		    	<tr>
		    		<td><span class="label label-success">ប្រាក់អាប់ USD</span></td>
		    		<td>
		    			<input data-role="numerictextbox" 
							data-format="c4" data-decimals="4" readonly
							data-bind="value: obj.changes" />
		    		</td>
		    	</tr>
		    	<tr>
		    		<td><span class="label label-inverse">ប្រាក់អាប់ KHR</span></td>
		    		<td>
		    			<input data-role="numerictextbox" 
							data-format="c0" readonly
							data-culture="km-KH"
							data-bind="value: changes_khr" />
		    		</td>
		    	</tr>
		    </table>

		    <table class="pull-right">											
				<tr>
					<td>សរុបរង USD</td>
					<td>
						<input data-role="numerictextbox"
							data-format="c4" data-decimals="4" data-min="0" readonly
							data-bind="value: sub_total" />
					</td>
				</tr>
				<tr>
					<td>ពិន័យ USD</td>
					<td>
						<input data-role="numerictextbox" 
							data-format="c4" data-decimals="4" data-min="0"
							data-bind="value: obj.fine, events: {change : onChange}" />
					</td>
				</tr>
				<tr>
					<td>បញ្ចះុតំលៃ USD</td>
					<td>
						<input data-role="numerictextbox" 
							data-format="c4" data-decimals="4" data-min="0"
							data-bind="value: obj.discount, events: {change : onChange}" />
					</td>
				</tr>
				<tr>
					<td><span class="label label-success">សរុប USD</span></td>
					<td>
						<input data-role="numerictextbox"
							data-format="c4" data-decimals="4" readonly
							data-bind="value: obj.amount" />
					</td>
				</tr>					
				<tr>					
					<td><span class="label label-inverse">សរុប KHR</span></td>
					<td>
						<input data-role="numerictextbox" 
							data-format="c0" readonly
							data-culture="km-KH"
							data-bind="value: amount_khr" />
					</td>
				</tr>					
			</table>

			<div align="center" style="clear: both;">
				<span id="notification"></span>

				<span id="save" class="btn btn-success btn-icon glyphicons ok_2"><i></i>រក្សាទុក</span>								
				<span class="btn btn-inverse btn-icon glyphicons remove_2" data-bind="click: cancelChanges"><i></i>បិទ</span>
			</div>
		</div>		
	</div>
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
			
			<div align="center" style="font-size: medium;">			
			    <span data-bind="text: invoiceTypeKH"></span> |
			    <span data-bind="text: invoiceType"></span>
		    </div>
	    
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
							<span data-bind="text: total_usd"></span>
						</td>
					</tr>
					<tr>
						<td></td>
						<td></td>					
						<td align="right">សរុប (រៀល):</td>
						<td align="right" class="strong">
							<span data-bind="text: total_khr"></span>
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
			<span class="sno"></span>
		</td>
		<td style="font-size: x-small;">#=description#</td>
		<td class="center"><span style="font-size:x-small;">#=quantity#</span> <span style="font-size:xx-small;">#=unit[0]==null?"":unit[0].name#</span></td>
		<td class="right" style="font-size:x-small;">
			#if(currency[0].locale=="km-KH"){#
				#=kendo.toString(price, "c0", currency[0].locale)#
			#}else{#
				#=kendo.toString(price, "c", currency[0].locale)#
			#}#
		</td>
		<td class="right" style="font-size:x-small;">
			#if(currency[0].locale=="km-KH"){#
				#=kendo.toString(amount, "c0", currency[0].locale)#
			#}else{#
				#=kendo.toString(amount, "c", currency[0].locale)#
			#}#			
		</td>					
	</tr>     	
</script>

<script id="saleSummary" type="text/x-kendo-template">
	<div class="container-960">
		<div id="example" class="k-content">		

			<div class="hidden-print">
				<span class="pull-right glyphicons no-js remove_2" 
					onclick="javascript:window.history.back()"><i></i></span>

				<input id="dateSorter" />
				<input id="startDate" placeHolder="ថ្ងៃទី" />
				<input id="endDate" placeHolder="ដល់" />	

				<button id="search" type="button" class="btn btn-default"><i class="icon-search"></i></button>
				<button type="button" class="btn btn-default" onclick="javascript:window.print()"><i class="icon-print"></i></button>							
			</div>

			<br>

			<div align="center">
				<h4>របាយការណ៍សង្ខេប ចំណូល និង ចំណាយ ជាសាច់ប្រាក់</h4>
				
				<span id="lblStartDate"></span>																	
				<span id="lblEndDate"></span>									
			</div>			

			<br>
			
			<div class="box-generic">				
				<table class="table table-condensed table-vertical-center table-thead-simple">
					<thead>
						<tr>																			
							<th>ពណ៌នា</th>							
							<th class="right">ទឹកប្រាក់</th>
							<th class="right">សរុប</th>							
						</tr>
					</thead>
					<tbody>
						<tr class="selectable">													
							<td class="important"><a id="goSale">លក់</a></td>				
							<td class="right">
								<span data-bind="text: sale"></span>
							</td>
							<td></td>							
						</tr>
						<tr class="selectable">													
							<td class="important"><a id="goUnpaid">អតិថិជនជំពាក់</a></td>				
							<td class="right">
								<span data-bind="text: unpaid"></span>
							</td>
							<td></td>							
						</tr>
						<tr class="selectable">													
							<td class="important">ទទួលប្រាក់សុទ្ធ</td>				
							<td></td>
							<td class="right">
								<span data-bind="text: paid"></span>
							</td>							
						</tr>
						<tr class="selectable">													
							<td class="important"><a id="goInvest">វិនិយោគ</a></td>
							<td></td>				
							<td class="right">
								<span data-bind="text: invest"></span>
							</td>							
						</tr>
						<tr class="selectable">													
							<td class="important"><a id="goIncome">ចំណូលផ្សេងៗ</a></td>
							<td></td>				
							<td class="right">
								<span data-bind="text: income"></span>
							</td>						
						</tr>
						<tr class="selectable alert-info">													
							<td class="important strong">សរុប​ ចំណូល</td>	
							<td></td>			
							<td class="right">
								<span data-bind="text: total_income"></span>
							</td>						
						</tr>
						<tr class="selectable">													
							<td class="important"><a id="goBill">ទិញ</a></td>				
							<td class="right">
								<span data-bind="text: bill"></span>
							</td>
							<td></td>						
						</tr>
						<tr class="selectable">													
							<td class="important"><a id="goUnbill">ជំពាក់អ្នកផ្គត់ផ្គង់</a></td>				
							<td class="right">
								<span data-bind="text: unbill"></span>
							</td>
							<td></td>						
						</tr>
						<tr class="selectable">													
							<td class="important">បង់ប្រាក់សុទ្ធ</td>
							<td></td>				
							<td class="right">
								<span data-bind="text: billed"></span>
							</td>							
						</tr>
						<tr class="selectable">													
							<td class="important"><a id="goSalary">ប្រាក់ខែ</a></td>
							<td></td>				
							<td class="right">
								<span data-bind="text: salary"></span>
							</td>							
						</tr>
						<tr class="selectable">													
							<td class="important"><a id="goWitdraw">ដកប្រាក់</a></td>
							<td></td>				
							<td class="right">
								<span data-bind="text: witdraw"></span>
							</td>							
						</tr>
						<tr class="selectable">													
							<td class="important"><a id="goExpense">ចំណាយផ្សេងៗ</a></td>
							<td></td>				
							<td class="right">
								<span data-bind="text: expense"></span>
							</td>							
						</tr>
						<tr class="selectable alert-danger">													
							<td class="important strong">សរុប ចំណាយ</td>
							<td></td>				
							<td class="right">
								<span data-bind="text: total_expense"></span>
							</td>							
						</tr>																							
					</tbody>
					<tfoot>
					    <tr class="selectable">													
							<td class="important strong" style="font-size: medium; text-decoration: underline;">សរុប</td>
							<td>
								
							</td>
							<td class="right strong" style="font-size: medium; text-decoration: underline;">
								<span data-bind="text: total"></span>
							</td>														
						</tr>
					</tfoot>
				</table>						
			</div>			

		</div>
	</div>
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
								page: options.page,
								limit: options.pageSize,								
								filter: options.filter,
								sort: options.sort
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
				serverSorting: true,
				page: 1,
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
        
        dataSource 	: dataStore(baseUrl + "rinvoices"),

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

	banhji.saleCenter =  kendo.observable({    	
    	dataSource 		: dataStore(baseUrl + "bills"),
    	outstandingDS 	: dataStore(baseUrl + "bills/outstanding"),
    	contactDS 		: dataStore(baseUrl + "contacts"),
    	amountDS		: dataStore(baseUrl + "bills/amount"),    	
    	
    	searchField		: "",
    	contact_id 		: "",
    	stock 			: null,
    	product_id 		: 0,
    	isEdit 			: false,
    	
    	totalBill 		: 0,
    	totalSO 		: 0,
    	totalOpenInvoice: 0,
    	totalOverDue 	: 0,

    	totalCount 		: 0,
    	balance 		: 0,

    	pageLoad 		: function(){
    		
    	},
    	refresh 		: function(e){
    		e.preventDefault();
    		var self = this;
     		
      		this.loadData([]);

      		this.contactDS.filter([]);
      		this.contactDS.bind("requestEnd", function(){
      			self.set("contact_id", "");
      		});
    	},
    	loadData 		: function(para){
    		var self = this;
    		
    		this.dataSource.query({
    			filter: para,
    			sort: [
    				{ field: "issued_date", dir: "desc" },
    				{ field: "id", dir: "desc" }
    			],
    			page: 1,
    			pageSize: 50
    		}).then(function(){
    			var count = kendo.toString(self.dataSource.total(), "n0");   			
    			self.set("totalCount", count);
    		});
    		  
    		self.amountDS.filter(para);
    		self.amountDS.bind("requestEnd", function(e){
    			var response = e.response.results;
    			
    			self.set("balance", kendo.toString(response[0], "c"));
    		});

    		this.loadOutStandingInvoice();
    	},    	
    	loadOutStandingInvoice : function(){
			var self = this;

			this.outstandingDS.filter([]);						
			this.outstandingDS.bind("requestEnd", function(e){
				var response = e.response.results;
				
				self.set("totalBill", response[0].totalBill);
			  	self.set("totalSO", response[1].totalSO);
			  	self.set("totalOpenInvoice", response[2].totalOpenInvoice);
			  	self.set("totalMinProduct", response[3].totalMinProduct);			  	
			});							
		},
    	loadOpenBill 	: function(){
    		this.loadData([					
				{ field: "type", value: "bill" },
        		{ field: "status", operator: "where_in", value: [0,2] }
			]);
    	},
    	loadOpenSO 		: function(){
    		this.loadData([					
				{ field: "type", value: "so" },
        		{ field: "status", value: 0 }
			]);
    	},
    	loadOpenInvoice 	: function(){
    		this.loadData([					
				{ field: "type", value: "invoice" },
        		{ field: "status", operator: "where_in", value: [0,2] }
			]);
    	},
    	loadMinProduct 	: function(){			
			banhji.product.dataSource.filter([				
        		{ field: "status", value: 1 },
        		{ field: "on_hand <=", value: "order_point" }
			]);

			banhji.router.navigate('/products');			
    	}	
    });
	banhji.contactCenter =  kendo.observable({    	
    	dataSource 		: dataStore(baseUrl + "contacts"),
    	contactTypeDS 	: dataStore(baseUrl + "contacts/type"),

    	fieldList 		: [    		
    		{ id:"name", name:"ឈ្មោះ" },
    		{ id:"surname", name:"គោត្តនាម" },
    		{ id:"company", name:"ក្រុមហ៊ុន" },
    		{ id:"phone", name:"លេខទូរសព្ទ័" },
    		{ id:"number", name:"លេខកូដ" },
    		{ id:"status", name:"ស្ថានភាព" }
    	],

    	txtSearch 		: "",
    	fieldSearch 	: "phone",
    	contactTypeID 	: 0,

    	pageLoad 		: function(){
    		
    	},
    	search 			: function(){
    		var para = [];

    		if(this.get("txtSearch")!==""){
    			para.push({ field: this.get("fieldSearch"), operator:"contains", value: this.get("txtSearch") });
    		}

    		if(this.get("contactTypeID")>0){
    			para.push({ field: "contact_type_id", value: this.get("contactTypeID") });
    		}

    		if(para.length>0){
    			this.dataSource.filter(para);
    		}else{
    			this.dataSource.filter([]);
    		}
    	},
    	newContact 		: function(){
    		banhji.router.navigate('/contact');
    	},
    	goBill 		: function(e){			
			var d = e.data;

			banhji.saleCenter.loadData([
				{ field:"contact_id", value: d.id },
				{ field:"status", value: 0 }
			]);
			banhji.saleCenter.contactDS.filter({ field:"id", value: d.id });
			banhji.saleCenter.contactDS.bind("requestEnd", function(e){
				banhji.saleCenter.set("contact_id", d.id);
			});

			banhji.router.navigate('/sale_center');	
		},
		goAllBill 		: function(e){			
			var d = e.data;

			banhji.saleCenter.loadData({ field:"contact_id", value: d.id });
			banhji.saleCenter.contactDS.filter({ field:"id", value: d.id });
			banhji.saleCenter.contactDS.bind("requestEnd", function(e){
				banhji.saleCenter.set("contact_id", d.id);
			});

			banhji.router.navigate('/sale_center');	
		}
    });

	banhji.contact = kendo.observable({		
		dataSource 	: dataStore(baseUrl + "contacts"),
		contactTypeDS: dataStore(baseUrl + "contacts/type"),
		currencyDS 	: dataStore(baseUrl + "currencies"),

		contact 	: null,					
		genders		: ["M", "F"],
		statusList 	: [            
			{ "id": 1, "name": "កំពុងប្រើប្រាស់" },
			{ "id": 2, "name": "ផ្អាក់ប្រើប្រាស់" },
			{ "id": 0, "name": "ឈប់ប្រើប្រាស់" }
        ],		
		
		pageLoad 	: function(id){						
			if(id){						
				this.loadContact(id);
			}else{				
				this.addEmpty();
			}			
		},
		loadContact	: function(id){
    		var self = this;
    		
	    	this.dataSource.query({			    		    			
				filter: { field:"id", value: id }
			}).then(function(e){
				var view = self.dataSource.view();
					    	
	    		self.set("contact", view[0]);	    			    		
			});					
    	},      			
      	addEmpty 	: function(){
      		if(this.dataSource.total()==0){
				this.dataSource.add({									
					currency_id 	: 0,
					user_id 		: 0,
					contact_type_id : 0,														
					number			: "",			
					surname			: "",	
					name			: "",				  	  
					gender			: "M",	
					dob				: "",
					pob				: "",
					address 		: "",									
					family_member	: "",
					id_number 		: "",
					phone 			: "",
					email 			: "",
					job				: "",
					company			: "",					
					image_url 		: "",
					memo			: "",
					credit_limit 	: 0,												
					registered_date	: new Date(),
					status			: 1
				});
				
				var data = this.dataSource.data();			
				var obj = data[data.length - 1];			
				this.set("contact", obj);
			}	
		},
		cancel 		: function(e){
			e.preventDefault();

			this.dataSource.data([]);
			this.dataSource.cancelChanges();			

			window.history.back();			
		},
		save 		: function(){
			var self = this;
			this.dataSource.sync();

			var saved = false;			
			this.dataSource.bind("requestEnd", function(e){
				if(saved==false){
					saved = true;

					self.dataSource.data([]);					
					self.addEmpty();
					banhji.contactCenter.dataSource.fetch();
				}				
			});
		}		
	});        	
    banhji.newProduct =  kendo.observable({    	
    	dataSource 	: dataStore(baseUrl + "products"),
    	categoryDS 	: dataStore(baseUrl + "categories"),    	
    	unitDS	   	: dataStore(baseUrl + "units"),

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
      		banhji.product.dataSource.fetch();
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
    	dataSource 	: dataStore(baseUrl + "price_lists"),
    	productDS 	: dataStore(baseUrl + "products"),
    	stockDS 	: dataStore(baseUrl + "stocks"),    	
    	currencyDS 	: dataStore(baseUrl + "currencies"),    	
    	unitDS	   	: dataStore(baseUrl + "units"),

    	product 	: null,
    	priceList 	: null,
    	
    	pageLoad 	: function(id){    		
    		this.dataSource.filter({ field:"product_id", value: id });    		
    		this.stockDS.query({
    			filter: [
    				{ field:"product_id", value: id },
    				{ field:"quantity >", value: -1 }
    			],
    			sort: { field: "issued_date", dir: "desc" }
    		});    		
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

      			currency 		: [{locale:"km-KH"}],      			
      			unit 			: []
			});

			var data = this.dataSource.data();
			var obj = data[data.length - 1];
      						
			this.set("priceList", obj);	
      	},      	 	
      	save 			: function(){
      		this.dataSource.sync();
      		banhji.product.dataSource.fetch();

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
    	dataSource 	: dataStore(baseUrl + "products"),
    	categoryDS 	: dataStore(baseUrl + "categories"),    	
    	contactDS  	: dataStore(baseUrl + "contacts"),
    	vendorDS  	: dataStore(baseUrl + "contacts"),
    	currencyDS 	: dataStore(baseUrl + "currencies"),
    	unitDS 	   	: dataStore(baseUrl + "units"),
    	
    	searchField	: "",
    	cart 		: [],
    	priceList 	: [],
    	countItem 	: 0,

    	unit_id 	: null,
    	currency_id : null,
    	product_id 	: null,
    	description : "",
    	quantity 	: 1,
    	price 		: 0,
    	amount 		: 0,
    	
    	pageLoad 		: function(){    		
    		this.set("countItem", banhji.bill.lineDS.total());
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
    		var data = this.vendorDS.at(index);    		
    		
    		this.dataSource.filter({ field:"contact_id", operator:"by_vendor", value:data.id });
    	},
    	addToCart 		: function(){
    		var self = this,
    		isExist = false;

    		if(banhji.bill.lineDS.total>0){
	    		$.each(banhji.bill.lineDS.data(), function(index, value){
	    			if(value.product_id==self.get("product_id")){
	    				isExist = true;
	    				var newQty = value.quantity + self.get("quantity");	      			
		      			value.set("quantity", newQty);	      				      		
	    			}
	    		});
    		}

    		if(isExist==false){
    			var bill_id = 0;
				if(banhji.bill.get("isEdit")){
					bill_id = banhji.bill.get("bill").id;
				}
	    		banhji.bill.lineDS.add({
	      			bill_id 		: bill_id,
	      			unit_id 		: this.get("unit_id"),      			
	      			currency_id 	: this.get("currency_id"),
	      			product_id 		: this.get("product_id"),
	      			description		: this.get("description"),
	      			quantity		: this.get("quantity"),
	      			price 			: this.get("price"),
	      			amount 			: this.get("amount"),
	      			rate 			: 1,

	      			priceList 		: this.get("priceList")
	      		});
    		}

      		this.set("countItem", banhji.bill.lineDS.total());

      		this.closeWindow();
    	},    	
    	priceChanges 	: function(e){
    		var index = e.sender.selectedIndex;    		    		

    		this.set("price", this.priceList[index].price);
    		this.onChange();
    	},
    	currencyChanges : function(e){
    		var index = e.sender.selectedIndex;
    		var obj = this.currencyDS.at(index);    		    		
    		var amount = kendo.parseFloat(this.get("amount"));

    		this.set("currency_id", obj.id);
    		
    		if(this.get("currency_id")==2){
				this.set("amount", kendo.toString(amount, "c0", "km-KH"));
    		}else{
    			this.set("amount", kendo.toString(amount, "c"));
    		}     		
    	},
    	onChange 		: function(){    		
    		var amount = this.get("quantity") * this.get("price");

    		if(this.get("currency_id")==2){
				this.set("amount", kendo.toString(amount, "c0", "km-KH"));
    		}else{
    			this.set("amount", kendo.toString(amount, "c"));
    		}    		
    	},    	    	
    	openWindow		: function(e){
      		var data = e.data,
      		self = this;      		
      		
      		this.set("priceList", []);
      		$.each(data.price_lists, function(index, value){
      			self.priceList.push(value);      			
      		});

      		this.set("unit_id", data.price_lists[0].unit_id);
	    	this.set("currency_id", data.price_lists[0].currency_id);
	    	this.set("product_id", data.id);
	    	this.set("description", data.name +" "+ data.description);
	    	this.set("quantity", 1);
	    	this.set("price", data.price_lists[0].price);

	    	if(data.price_lists[0].currency_id==2){
	    		this.set("amount", kendo.toString(data.price_lists[0].price, "c0", "km-KH"));
	    	}else{
	    		this.set("amount", kendo.toString(data.price_lists[0].price, "c"));
	    	}

	    	this.set("priceList", data.price_lists);

         	var window = $("#cart-window").data("kendoWindow");
          	window.title("រទេះទំនិញ");          	
          	window.center().open();         	
      	},
      	closeWindow 	: function(){
      		var window = $("#cart-window").data("kendoWindow");          	         	
          	window.close();          	
      	}
    });
    banhji.newStock =  kendo.observable({    	
    	dataSource 	: dataStore(baseUrl + "stocks"),    	
    	currencyDS 	: dataStore(baseUrl + "currencies"),
    	contactDS  	: dataStore(baseUrl + "contacts"),
    	unitDS 	   	: dataStore(baseUrl + "units"),

    	searchField	: "",
    	stock 		: null,
    	product_id 	: 0,
    	isEdit 		: false,

    	pageLoad 		: function(id){
    		this.set("product_id", id);    		    		
    		this.contactDS.filter({ field:"contact_type_id", value: 5 });
    		this.addEmpty();
    	},    	
      	addEmpty 		: function(){
      		if(this.dataSource.total()==0){
	      		this.dataSource.add({      			
	      			currency_id 	: 1,
	      			reference_id 	: 0,
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
      		}			
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
    	dataSource 		: dataStore(baseUrl + "bills"),
    	lineDS 	 		: dataStore(baseUrl + "bills/line"),    	
    	currencyDS 		: dataStore(baseUrl + "currencies"),
    	contactDS  		: dataStore(baseUrl + "contacts"),
    	contactSearchDS : dataStore(baseUrl + "contacts"),    		   	   	
    	unitDS 		 	: dataStore(baseUrl + "units"),    	
    	stockDS 		: dataStore(baseUrl + "stocks"),

    	bill 			: null,
    	contact 		: null,
    	biller_id 		: 1,    	
    	phone 			: "",
    	name 			: "",
    	isEdit 			: false,
    	unitList 		: [],
    	currencyList 	: [],
    	typeList 		: [
    		{ id:"invoice", name:"វិក្កយបត្រ" },
    		{ id:"receipt", name:"បង្កាន់ដៃលក់" },
    		{ id:"so", name:"បញ្ជាលក់" },
    		{ id:"bill", name:"វិក្កយបត្រទិញ" },
    		{ id:"po", name:"បញ្ជាទិញ" },
    		{ id:"expense", name:"ចំណាយ" },
    		{ id:"income", name:"ចំណូល" },
    		{ id:"invest", name:"វិនិយោគ" },
    		{ id:"witdraw", name:"ដកប្រាក់" },
    		{ id:"salary", name:"ប្រាក់ខែ" }
    	],
    	
    	sub_total 		: 0,
    	amount_khr 		: 0,
    	changes_khr		: 0,    	
    	
    	pageLoad 		: function(id){
    		var self = this,
    		isRefreshed = false;

    		this.setData();
    		
    		if(id){
    			this.set("isEdit", true);
	    		this.loadBill(id);  			
    		}else{
    			//Refresh grid
	    		if(this.lineDS.total()>0 && isRefreshed==false){
			 		var childGrid = $(".k-grid").data("kendoGrid");
	    			childGrid.refresh();
			 	}

			 	this.setEmpty();
			 	this.setEmptyContact();			 			 	
			 	this.onChange();			 				 			 			 			   			
    		}
    	},
    	loadBill 		: function(id){
    		var self = this;
    		this.set("bill_id", id);

    		this.dataSource.query({    			
				filter: { field:"id", value: id }
			}).then(function(e){
				var view = self.dataSource.view();
		    	self.set("bill", view[0]);

		    	self.loadContact(view[0].contact_id);		    		    			    	
			});												
			
			this.lineDS.query({
				filter: { field:"bill_id", value: id }
			}).then(function(e){
				var amount = 0,
	      		total = 0,
	      		totalPaid = 0,
	      		totalChanges = 0,
	      		bill = self.get("bill");

				$.each(self.lineDS.view(), function(index, value){
					value.amount = value.quantity * value.price;

	      			if(value.currency_id==2){
	      				amount += kendo.parseFloat(value.amount) / kendo.parseFloat(bill.rate);
	      			}else{
	      				amount += kendo.parseFloat(value.amount);
	      			}
				});

				total = (amount + bill.fine) - bill.discount;      		

	      		self.set("sub_total", amount, "c");	      		
	      		self.set("amount_khr", total*bill.rate);
	      		
	      		if(bill.paid_usd>0 || bill.paid_khr>0){
		      		totalPaid = bill.paid_usd + (bill.paid_khr/bill.rate);
		      		totalChanges = totalPaid - total;
		      		
		      		self.set("changes_khr", totalChanges*bill.rate);
	      		}else{	      			
		      		self.set("changes_khr", 0);
	      		}

	      		self.autoIncreaseNo();	    		    			    	
			});

			this.stockDS.filter({ field:"reference_id", value: id });
    	},
    	loadContact		: function(id){
    		var self = this,
    		bill = this.get("bill");
    		
	    	this.contactDS.query({			    		    			
				filter: { field:"id", value: id }
			}).then(function(e){
				var view = self.contactDS.view();
					    	
	    		self.set("contact", view[0]);
	    		bill.set("address", view[0].address);	    		
			});					
    	},    	
    	setData 		: function(){
    		var self = this;

    		if(this.unitDS.total()==0){
	    		this.unitDS.query({    			
					page: 1,
					limit: 100
				}).then(function(e){
					$.each(self.unitDS.view(), function(index, value){
						self.unitList.push({
							unit_id : value.id,
							unit 	: value.name,
							price   : 0
						});
					});	    		    			    	
				});
			}

			if(this.currencyDS.total()==0){
				this.currencyDS.query({    			
					page: 1,
					limit: 100
				}).then(function(e){
					var viewC = self.currencyDS.view();
			    	self.set("currencyList", viewC);		    		    			    	
				});
			}
    	},    	
      	setEmpty 		: function(){
      		if(this.get("isEdit")==false){      		
	      		var self = this, hasNew = false;

	      		if(this.dataSource.total()>0){
	      			$.each(this.dataSource.data(), function(index, value){
	      				if(value.id==""){
	      					hasNew = true;
	      					self.set("bill", value);

	      					return false;
	      				}
	      			});
	      		}

	  			if(hasNew==false){      			
		      		this.dataSource.add({      			
		      			contact_id 		: 0,
		      			biller_id 		: 0,      			
		      			currency_id 	: 1,
		      			reference_id 	: 0,
		      			type 			: "invoice",
		      			number 			: "",
		      			amount 		 	: 0,	      			
		      			paid 			: 0,
		      			paid_usd 		: 0,
		      			paid_khr 		: 0,
		      			changes 		: 0,	      			
		      			discount 		: 0,
		      			fine 			: 0,
		      			rate 			: 4100,
		      			memo 			: "",
		      			address 		: "",
		      			status 			: "",      			
		      			issued_date		: new Date(),
		      			due_date 		: new Date(),
		      			paid_date 		: ""	      			
					});

					var data = this.dataSource.data(),
					obj = data[data.length - 1];
		      						
					this.set("bill", obj);
				}
			}
      	},
      	setEmptyContact : function(){
      		if(this.contactDS.total()>0){
      			var contact = this.contactDS.data();
      			this.set("contact", contact[0]);
      		}else{
	      		this.contactDS.add({      			
	      			currency_id		: 2,
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

				var data = this.contactDS.data(),
				obj = data[data.length - 1];
	      						
				this.set("contact", obj);
			}			
      	},      	
      	phoneSearch 	: function(){
      		var self = this;

      		this.contactSearchDS.query({
      			filter: { field:"phone", operator:"contains", value:this.get("phone") }
      		}).then(function(e){
      			var view = self.contactSearchDS.view();

      			if(self.contactSearchDS.total()>0){      			
			    	self.loadContact(view[0].id);
			    }else{			    	
			    	self.setEmptyContact();

			    	var contact = self.get("contact"),
			    	bill = self.get("bill");
			    	contact.set("phone", self.get("phone"));
			    	bill.set("address", "");
			    }
      		});
      	},
      	removeSearch 	: function(){
      		var bill = this.get("bill");
      		bill.set("address", "");
      		this.set("name", "");
      		this.contactSearchDS.filter({ field:"id >", value: 0 });      		      		
      		this.setEmptyContact();
      	},      	
      	autoIncreaseNo 	: function(){
			$(".sno").each(function(index,element){                 
			   $(element).text(index + 1); 
			});
		},
      	addRow 			: function(){
      		var bill_id = 0;
			if(this.get("isEdit")){
				bill_id = this.get("bill").id;
			}

      		this.lineDS.add({
      			bill_id 		: bill_id,
      			unit_id 		: 0,      			
      			currency_id 	: 1,
      			product_id 		: 0,
      			description		: "",
      			quantity		: 1,
      			price 			: 0,
      			amount 			: 0,
      			rate 			: 1,

      			priceList 		: this.get("unitList")
      		});

      		this.autoIncreaseNo();      		
      	},
      	removeRow 		: function(e){						
			var d = e.data, self = this;

			this.lineDS.remove(d);
	        this.onChange();

	        //Delete stock too
	        if(this.get("isEdit")){
	        	$.each(this.stockDS.data(), function(index, value){
	        		if(value.product_id==d.product_id){
	        			self.stockDS.remove(value);

	        			return false;
	        		}
	        	});
	        }		        
		},      	
      	onChange 		: function(){
      		if(this.lineDS.total()>0){
	      		var amount = 0,
	      		total = 0,
	      		totalPaid = 0,
	      		totalChanges = 0,
	      		bill = this.get("bill");

	      		$.each(this.lineDS.data(), function(index, value){
	      			value.amount = value.quantity * value.price;

	      			if(value.currency_id==2){
	      				amount += kendo.parseFloat(value.amount) / kendo.parseFloat(bill.rate);
	      			}else{
	      				amount += kendo.parseFloat(value.amount);
	      			}      			
	      		});

	      		total = (amount + bill.fine) - bill.discount;      		

	      		this.set("sub_total", amount, "c");
	      		bill.set("amount", total);
	      		this.set("amount_khr", total*bill.rate);
	      		
	      		if(bill.paid_usd>0 || bill.paid_khr>0){
		      		totalPaid = bill.paid_usd + (bill.paid_khr/bill.rate);
		      		totalChanges = totalPaid - total;

		      		if(totalChanges>=0){
		      			bill.set("status", 1);
		      			bill.set("paid_date", bill.issued_date);
		      		}else{
		      			bill.set("status", 0);
		      			bill.set("paid_date", "");
		      		}

		      		bill.set("paid", totalPaid);
		      		bill.set("changes", totalChanges);
		      		this.set("changes_khr", totalChanges*bill.rate);
	      		}else{
	      			bill.set("status", 0);
		      		bill.set("paid_date", "");

	      			bill.set("paid", 0);
	      			bill.set("changes", 0);
		      		this.set("changes_khr", 0);
	      		}

	      		this.autoIncreaseNo();
	      	}
      	},
      	unitChanges 	: function(e){
      		var d = e.data,
      		index = e.sender.selectedIndex;

      		if(index>0){
      			d.set("price", d.priceList[index-1].price);
      			d.set("currency_id", d.priceList[index-1].currency_id);
      		}else{
      			d.set("price", 0);
      		}

      		this.onChange();
      	},
      	getRate 		: function(from_currency_id, to_currency_id){
    		var rate = 1, self = this;

    		if(this.currencyDS.total()>0){
    			if(from_currency_id!==to_currency_id){    					
					var from_currency = this.currencyDS.get(from_currency_id),
					to_currency = this.currencyDS.get(to_currency_id);
				
		        	var from_rate = kendo.parseFloat(from_currency.rate),
		        	to_rate = kendo.parseFloat(to_currency.rate);
		        	
		        	if(from_rate>0 && to_rate>0){
		        		rate = to_rate/from_rate;
		        	}	
		        }

		        return rate;
		    }else{
		    	this.currencyDS.query({
	      			page: 1,
	      			limit: 100	      			
	      		}).then(function(e){
	      			var view = self.currencyDS.view();	      			

					if(from_currency_id!==to_currency_id){
						var from_currency = self.currencyDS.get(from_currency_id),
						to_currency = self.currencyDS.get(to_currency_id);

			        	var from_rate = kendo.parseFloat(from_currency.rate),
			        	to_rate = kendo.parseFloat(to_currency.rate);
			        	
			        	if(from_rate>0 && to_rate>0){
			        		rate = from_rate/to_rate;
			        	}	
			        }

			        return rate;
	      		});	      		
	    	}	        		    
		},
      	cancelChanges 	: function(){
      		this.dataSource.cancelChanges();
      		this.lineDS.cancelChanges();
      		this.contactDS.cancelChanges();      		

      		if(this.get("isEdit")){
      			this.stockDS.cancelChanges();
      		}      		

      		this.clear();      				

      		window.history.back();      		
      	},
      	clear		 	: function(){
      		this.dataSource.data([]);      		
      		this.lineDS.data([]);
      		this.contactDS.data([]);
      		
      		this.set("phone", "");
      		this.set("name", "");
      		this.set("sub_total", 0);
      		this.set("amount_khr", 0);
      		this.set("changes_khr", 0);

      		this.set("isEdit", false);

      		this.pageLoad();
      		banhji.product.dataSource.fetch();      		  		
      	}, 
      	save 			: function(){
      		var self = this,
      		newContact = this.contactDS.data(),
      		contact = this.get("contact"),
      		bill = this.get("bill");      		
      		
      		if(this.get("isEdit")){ //Update Bill
      			bill.set("issued_date", kendo.toString(bill.issued_date, "yyyy-MM-dd"));
	      		bill.set("due_date", kendo.toString(bill.due_date, "yyyy-MM-dd"));

	      		if(bill.contact_id!==contact.id){
	      			bill.set("contact_id", contact.id);
	      		}
	      		this.updateStock();

	      		this.dataSource.sync();
	  			this.lineDS.sync();
	  			this.contactDS.sync();

	  			this.set("isEdit", false);  			
	  			banhji.router.navigate('/sale_center');	
      		}else{
      			if(contact.id>0){ //New Bill With Existing Customer      				
      				bill.set("contact_id", contact.id);
      				this.contactDS.sync();

	      			//Bill
	      			this.dataSourceSync()
	      			.then(function(data){
	      				//Stock
		      			self.stockSync(data.data[0].id);

	      				//Line
	      				$.each(self.lineDS.data(), function(index, value){
	      					value.set("bill_id", data.data[0].id);
	      				});
	      				self.lineDS.sync();
	      				self.lineDS.bind("requestEnd", function(e){
	      					self.clear();
	      				});
	      			});	
      			}else{
      				//New Bill With General Customer, id always = 1
		      		if(contact.phone==="" && contact.name===""){		      		     			
		      			bill.set("contact_id", 1);
		      			
		      			//Bill		      			
		      			this.dataSourceSync()
		      			.then(function(data){
		      				//Stock
		      				self.stockSync(data.data[0].id);

		      				//Line
		      				$.each(self.lineDS.data(), function(index, value){
		      					value.set("bill_id", data.data[0].id);
		      				});	      				

		      				self.lineDS.sync();
		      				self.lineDS.bind("requestEnd", function(e){
								self.clear();
							});	      				
		      			});		      		
		      		}else{ //New Bill With New Customer		      			
		      			newContact[0].set("address", bill.address);

		      			//Contact
		      			this.contactSync()
			      		.then(function(data){
			      			bill.set("contact_id", data.data[0].id);

			      			//Bill
			      			self.dataSourceSync()
			      			.then(function(billData){
			      				//Stock
			      				self.stockSync(billData.data[0].id);

			      				//Line
			      				$.each(self.lineDS.data(), function(index, value){
			      					value.set("bill_id", billData.data[0].id);
			      				});	      				

			      				self.lineDS.sync();
			      				self.lineDS.bind("requestEnd", function(e){
									self.clear();
								});	      				
			      			});
			      		});
		      		}	
      			}      			
      		}      		
      	},      	
      	delete 			: function(){
			if (confirm("តើលោកអ្នកពិតជាចង់លុបមែនឬទេ?")) {
				var bill = this.get("bill");
				bill.set("deleted", 1);								

				for (var i=0; i<this.stockDS.total(); i++) {
					var s = this.stockDS.at(i);
					s.set("deleted", 1);
				}		        
		        
		        this.dataSource.sync();		       
		        this.stockDS.sync();

		        this.set("isEdit", false);
		        banhji.router.navigate('/sale_center');
	    	}	    	
	    },	    
      	updateStock		: function(){
      		var self = this,
      		isOut = -1,     		
      		bill = this.get("bill");
      		
  			if(bill.type=="bill"){
  				isOut = 1;
  			}

      		//Stock	      		
      		$.each(this.lineDS.data(), function(index, value){
      			if(value.product_id>0){
					if(value.id===""){
						self.stockDS.add({      			
			      			currency_id 	: value.currency_id,
			      			reference_id	: bill.id,
			      			contact_id 		: 0,
			      			product_id 		: value.product_id,
			      			unit_id 		: value.unit_id,
			      			quantity		: value.quantity * isOut,
			      			price 			: value.price,
			      			issued_date		: bill.issued_date,

			      			priceList 		: value.priceList
						});
					}else{
						self.setStock(value.id, value.product_id);
					}
				}			
			});			

			this.stockDS.sync();
			this.stockDS.bind("requestEnd", function(e){
				self.stockDS.data([]);
			});						
      	},
      	setStock 		: function(line_id, product_id){
      		var l = this.lineDS.get(line_id);

      		$.each(this.stockDS.data(), function(index, value){
      			if(value.product_id==product_id){
	      			value.set("currency_id", l.currency_id);
	      			value.set("unit_id", l.unit_id);
	      			value.set("quantity", l.quantity);
	      			value.set("price", l.price);

	      			return false;
      			}
      		});
      	},
      	stockSync 		: function(bill_id){
      		var self = this,
      		isOut = -1,     		
      		bill = this.get("bill");
      		
  			if(bill.type=="bill"){
  				isOut = 1;
  			}

      		//Stock	      		
      		$.each(this.lineDS.data(), function(index, value){
      			if(value.product_id>0){
					self.stockDS.add({      			
		      			currency_id 	: value.currency_id,
		      			reference_id	: bill_id,
		      			contact_id 		: bill.contact_id,
		      			product_id 		: value.product_id,
		      			unit_id 		: value.unit_id,
		      			quantity		: value.quantity * isOut,
		      			price 			: value.price,
		      			issued_date		: bill.issued_date,

		      			priceList 		: value.priceList
					});
				}				
			});			

			this.stockDS.sync();
			this.stockDS.bind("requestEnd", function(e){
				self.stockDS.data([]);
			});						
      	},      	
	    dataSourceSync 	: function() {
			var dfd = $.Deferred();
			this.dataSource.sync();
			this.dataSource.bind("requestEnd", function(e){
				if(e.response.results) {
					dfd.resolve({type: e.type, data: e.response.results});
				} else {
					dfd.reject({error: e.type + ' can not process.'});
				}
			});
			return dfd.promise();
		},
		contactSync 	: function() {
			var dfd = $.Deferred();
			this.contactDS.sync();
			this.contactDS.bind("requestEnd", function(e){
				if(e.response.results) {
					dfd.resolve({type: e.type, data: e.response.results});
				} else {
					dfd.reject({error: e.type + ' can not process.'});
				}
			});
			return dfd.promise();
		},
		print 			: function(){
			banhji.router.navigate('/invoice_print/' + this.get("bill").id);
		}
    });
	banhji.payment =  kendo.observable({    	    	
    	dataSource 		: dataStore(baseUrl + "bills"),
    	contactDS 		: dataStore(baseUrl + "contacts"),
    	
    	obj 			: null,
    	sub_total 		: 0,
    	amount_khr 		: 0,
    	changes_khr		: 0,  	  	
    	
    	pageLoad 		: function(id){
    		if(id){
    			this.loadBill(id);
    		}else{

    		}
    	},
    	autoIncreaseNo 	: function(){
			$(".sno").each(function(index,element){                 
			   $(element).text(index + 1); 
			});
		},
		loadBill 		: function(id){
    		var self = this;
    		
    		this.dataSource.query({    			
				filter: { field:"id", value: id }
			}).then(function(e){
				var view = self.dataSource.view();

				if(self.dataSource.total()>0){
					var bill = view[0];

			    	self.set("obj", view[0]);
			    	bill.set("paid_date", new Date());
			    	self.loadContact(bill.contact_id);

			    	var subtotal = (bill.amount - bill.fine) + bill.discount;      		

		      		self.set("sub_total", subtotal);	      		
		      		self.set("amount_khr", bill.amount*bill.rate);
		      		
		      		if(bill.paid_usd>0 || bill.paid_khr>0){
			      		var totalPaid = bill.paid_usd + (bill.paid_khr/bill.rate),
			      		totalChanges = totalPaid - subtotal;
			      		
			      		self.set("changes_khr", totalChanges*bill.rate);
		      		}else{	      			
			      		self.set("changes_khr", 0);
		      		}

		      		self.autoIncreaseNo();
	      		}		    		    			    	
			});			
    	},
    	loadContact		: function(id){
    		var self = this,
    		bill = this.get("obj");
    		
	    	this.contactDS.query({			    		    			
				filter: { field:"id", value: id }
			}).then(function(e){
				var view = self.contactDS.view();
					    	
	    		self.set("contact", view[0]);	    		    		
			});					
    	},  
		onChange 		: function(){      		
      		var total = 0,
      		totalPaid = 0,
      		totalChanges = 0,
      		bill = this.get("obj");      		

      		var subtotal = this.get("sub_total");
      		total = (subtotal + bill.fine) - bill.discount;      		

      		
      		bill.set("amount", total);
      		this.set("amount_khr", total*bill.rate);
      		
      		if(bill.paid_usd>0 || bill.paid_khr>0){
	      		totalPaid = bill.paid_usd + (bill.paid_khr/bill.rate);
	      		totalChanges = totalPaid - total;

	      		if(totalChanges>=0){
	      			bill.set("status", 1);	      			
	      		}else{
	      			bill.set("status", 0);	      			
	      		}

	      		bill.set("paid", totalPaid);
	      		bill.set("changes", totalChanges);
	      		this.set("changes_khr", totalChanges*bill.rate);
      		}else{
      			bill.set("status", 0);	      		

      			bill.set("paid", 0);
      			bill.set("changes", 0);
	      		this.set("changes_khr", 0);
      		}

      		this.autoIncreaseNo();	      	
      	},
      	payAll 		: function(){
      		var bill = this.get("obj");

      		bill.set("paid_usd", bill.amount);
      		this.onChange();
      	},
      	save 			: function(){
      		var self = this;

      		this.dataSource.sync();
      		this.dataSource.bind("requestEnd", function(e){
      			window.history.back();
      		});
      	}
    });
    banhji.invoicePrint =  kendo.observable({    	
    	dataSource 	: dataStore(baseUrl + "bills"),
    	lineDS 		: dataStore(baseUrl + "bills/line"),
    	
    	bill 		: null,
    	invoiceType : "Invoice",
    	invoiceTypeKH : "វិក្កយបត្រ",
    	total_usd 	: 0,
    	total_khr 	: 0,    	  	

    	pageLoad 	: function(id){
    		var self = this;

    		this.dataSource.query({
				filter: { field:"id", value: id }
			}).then(function(e){
				var view = self.dataSource.view();
				
				self.setTitle(view[0].type);
		    	self.set("bill", view[0]);		    	
		    	self.set("total_usd", kendo.toString(view[0].amount, "c"));
		    	self.set("total_khr", kendo.toString(view[0].amount*view[0].rate, "c0", "km-KH"));		    	
			});

			this.lineDS.query({
				filter: { field:"bill_id", value: id }
			}).then(function(e){
				self.autoIncreaseNo();		    	
			});    		
    	},
    	setTitle 		: function(type){    		
    		switch(type) {
			    case "receipt":
			    	this.set("invoiceType", "Receipt");
			        this.set("invoiceTypeKH", "បង្កាន់ដៃលក់");
			        break;
			    case "so":
			    	this.set("invoiceType", "Sale Order");
			        this.set("invoiceTypeKH", "បញ្ជាលក់");
			        break;
			    case "bill":
			    	this.set("invoiceType", "Bill");
			        this.set("invoiceTypeKH", "វិក្កយបត្រទិញ");
			        break;
			    case "po":
			    	this.set("invoiceType", "Purchase Order");
			        this.set("invoiceTypeKH", "បញ្ជាទិញ");
			        break;
			    case "expense":
			    	this.set("invoiceType", "Expense");
			        this.set("invoiceTypeKH", "ចំណាយ");
			        break;
			    case "income":
			    	this.set("invoiceType", "Income");
			        this.set("invoiceTypeKH", "ចំណូល");
			        break;
			    default:
			    	this.set("invoiceType", "Invoice");
			        this.set("invoiceTypeKH", "វិក្កយបត្រ");
			}
    	},
    	autoIncreaseNo 	: function(){
			$(".sno").each(function(index,element){                 
				$(element).text(index + 1); 
			});
		}    	
    });

    banhji.saleSummary =  kendo.observable({    	
    	dataSource 	: dataStore(baseUrl + "bills/sale_summary"),
    	
    	obj 		: null,    	
    	start_date 	: "",
    	end_date 	: "",

    	sale 		: 0,
    	unpaid 		: 0,
    	paid 		: 0,
    	invest 		: 0,
    	income 		: 0,
    	total_income: 0,

    	bill 		: 0,
    	unbill 	: 0,
    	billed 		: 0,
    	salary 		: 0,
    	witdraw 	: 0,
    	expense 	: 0,
    	total_expense: 0,

    	pageLoad 	: function(){
    		
    	},
    	loadData 	: function(para){
    		var self = this;

    		this.dataSource.query({
				filter: para
			}).then(function(e){
				var view = self.dataSource.view();				
				
		    	self.set("obj", view[0]);

		    	self.set("sale", kendo.toString(view[0].sale, "c"));
		    	self.set("unpaid", kendo.toString(view[0].unpaid, "c"));
		    	self.set("paid", kendo.toString(view[0].paid, "c"));
		    	self.set("invest", kendo.toString(view[0].invest, "c"));
		    	self.set("income", kendo.toString(view[0].income, "c"));
		    	self.set("total_income", kendo.toString(view[0].total_income, "c"));

		    	self.set("bill", kendo.toString(view[0].bill, "c"));
		    	self.set("unbill", kendo.toString(view[0].unbill, "c"));
		    	self.set("billed", kendo.toString(view[0].billed, "c"));
		    	self.set("salary", kendo.toString(view[0].salary, "c"));
		    	self.set("witdraw", kendo.toString(view[0].witdraw, "c"));
		    	self.set("expense", kendo.toString(view[0].expense, "c"));
		    	self.set("total_expense", kendo.toString(view[0].total_expense, "c"));

		    	self.set("total", kendo.toString(view[0].total, "c"));	    	    	
			});
    	}    	
    });    	

	<!-- //views and layout -->
	banhji.view = {
		layout 		: new kendo.Layout('#layout', {model: banhji.Layout}),
		blank		: new kendo.View('<div></div>'),
		menu 		: new kendo.View('#menu-tmpl'),
		loginV 		: new kendo.View("#login-tmpl", {model: auth}),
		index  		: new kendo.Layout("#index"),
		myTmpl 		: new kendo.Layout('#my-tmpl'),
		userList 	: new kendo.View('#admin-userList-tmpl', {model: user}),
		newUser 	: new kendo.View('#userList-new-tmpl', {model: user}),
		editUser 	: new kendo.View('#userList-edit-tmpl', {model: user}),
		pwdUser 	: new kendo.View('#userList-password-tmpl', {model: user}),
		adTmpl 		: new kendo.Layout('#admin-tmpl'),	
		
		rInvoicePrint: new kendo.View("#rInvoicePrint", {model: banhji.rInvoicePrint}),
		contact: new kendo.View("#contact", {model: banhji.contact}),
		contactCenter: new kendo.View("#contactCenter", {model: banhji.contactCenter}),

		newProduct: new kendo.View("#newProduct", {model: banhji.newProduct}),
		priceList: new kendo.View("#priceList", {model: banhji.priceList}),
		product: new kendo.View("#product", {model: banhji.product}),
		newStock: new kendo.View("#newStock", {model: banhji.newStock}),
		bill: new kendo.View("#bill", {model: banhji.bill}),
		payment: new kendo.View("#payment", {model: banhji.payment}),
		invoicePrint: new kendo.View("#invoicePrint", {model: banhji.invoicePrint}),
		saleCenter: new kendo.View("#saleCenter", {model: banhji.saleCenter}),
		saleSummary: new kendo.View("#saleSummary", {model: banhji.saleSummary})		
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
		banhji.view.layout.showIn('#menu', banhji.view.menu);
		banhji.view.layout.showIn('#content', banhji.view.index);
	});

	banhji.router.route("/sale_center", function(){
		if(!auth.getLogin()){
			banhji.router.navigate('/login');
		}else{			
			var vm = banhji.saleCenter;			
			banhji.view.layout.showIn("#content", banhji.view.saleCenter);

			vm.pageLoad();

			if(banhji.pageLoaded["sale_center"]==undefined){
				banhji.pageLoaded["sale_center"] = true;

				banhji.view.layout.showIn('#menu-barr', banhji.view.menu);
				vm.loadData([]);

				var contact = $("#ddlContact").kendoComboBox({
                    placeholder: "ឈ្មោះ...",
                    dataTextField: "fullIdName",
                    dataValueField: "id",
                    filter: "search",
                    autoBind: false,
                    minLength: 3,
                    dataSource: vm.contactDS
                }).data("kendoComboBox");

                var billType = $("#ddlBillType").kendoDropDownList({
                	optionLabel: "(--- រើសប្រភេទ ---)",
                    dataTextField: "name",
                    dataValueField: "id",
                    dataSource: banhji.bill.typeList
                }).data("kendoDropDownList");

				$('.nav li a').click(function(e) {
			        //e.preventDefault();

			        $('.nav li').removeClass('active');

			        var $parent = $(this).parent();
			        if (!$parent.hasClass('active')) {
			            $parent.addClass('active');
			        }			        
			    });
				
				$("#dateSorter").kendoDropDownList({
					dataTextField: "text",
		            dataValueField: "value",
				 	dataSource: [ 
				 		{ text:"ទាំងអស់", value: "all" }, 
				 		{ text:"ថ្ងៃនេះ", value: "today" }, 
				 		{ text:"សប្ដាស៍នេះ", value: "week" }, 
				 		{ text:"ខែនេះ", value: "month" }, 
				 		{ text:"ឆ្នាំនេះ", value: "year" } 
				 	],
				  	change: function(e) {
				    	var value = this.value();
				    	
				    	sorterChanges(value);			    	
				  	}
				});
		        
				var sdate = $("#startDate").kendoDatePicker({
				    format: "dd-MM-yyyy"
				}).data("kendoDatePicker");

				var edate = $("#endDate").kendoDatePicker({
				    format: "dd-MM-yyyy"
				}).data("kendoDatePicker");				

		        function sorterChanges(value){        	
					switch(value){
					case "today":
						var today = new Date();
						sdate.value(today);
						edate.value(null);
					  					
					  	break;
					case "week":
					  	var thisWeek = new Date;
						var first = thisWeek.getDate() - thisWeek.getDay(); 
						var last = first + 6;

						var firstDayOfWeek = new Date(thisWeek.setDate(first));
						var lastDayOfWeek = new Date(thisWeek.setDate(last));

						sdate.value(firstDayOfWeek);
						edate.value(lastDayOfWeek);
						
					  	break;
					case "month":
						var thisMonth = new Date;				  	
						var firstDayOfMonth = new Date(thisMonth.getFullYear(), thisMonth.getMonth(), 1);
						var lastDayOfMonth = new Date(thisMonth.getFullYear(), thisMonth.getMonth() + 1, 0);

						sdate.value(firstDayOfMonth);
						edate.value(lastDayOfMonth);

					  	break;
					case "year":
						var thisYear = new Date();
					  	var firstDayOfYear = new Date(thisYear.getFullYear(), 0, 1);
						var lastDayOfYear = new Date(thisYear.getFullYear(), 11, 31);

						sdate.value(firstDayOfYear);
						edate.value(lastDayOfYear);

					  	break;
					default:
						sdate.value(null);
						edate.value(null);					  
					}
				}

				$("#search").click(function(e){
		        	e.preventDefault();

		        	var start = sdate.value(),
		        		end = edate.value(),		        		
		        		para = [];

		        	//Dates
		        	if(start && end){
		            	para.push({ field:"issued_date >=", value: kendo.toString(start, "yyyy-MM-dd") });
		            	para.push({ field:"issued_date <=", value: kendo.toString(end, "yyyy-MM-dd") });            	            	
		            }else if(start){
		            	para.push({ field:"issued_date", value: kendo.toString(start, "yyyy-MM-dd") });
		            }else if(end){
		            	para.push({ field:"issued_date <=", value: kendo.toString(end, "yyyy-MM-dd") });
		            }else{
		            	
		            }

		            if(contact.value()){
		            	para.push({ field:"contact_id", value: contact.value() });
		            }

		            if(billType.value()){
		            	para.push({ field:"type", value: billType.value() });
		            }

		            vm.loadData(para);		    		
				});		
			}											
		}
	});
	banhji.router.route("/contact_center", function(id){
		if(!auth.getLogin()){
			banhji.router.navigate('/login');
		}else{
			if(banhji.pageLoaded["sale_center"]==undefined){
				banhji.router.navigate('/sale_center');
			}else{
				var vm = banhji.contactCenter;
				
				banhji.view.layout.showIn("#content", banhji.view.contactCenter);				
				
				if(banhji.pageLoaded["contact_center"]==undefined){
					banhji.pageLoaded["contact_center"] = true;					

				}
			}	
		}
	});
	banhji.router.route("/contact(/:id)", function(id){
		if(!auth.getLogin()){
			banhji.router.navigate('/login');
		}else{
			if(banhji.pageLoaded["sale_center"]==undefined){
				banhji.router.navigate('/sale_center');
			}else{
				var vm = banhji.contact;
				
				banhji.view.layout.showIn("#content", banhji.view.contact);

				vm.pageLoad(id);			
				
				if(banhji.pageLoaded["contact"]==undefined){
					banhji.pageLoaded["contact"] = true;

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
		}
	});
	banhji.router.route("/new_product(/:id)", function(id){
		if(!auth.getLogin()){
			banhji.router.navigate('/login');
		}else{
			if(banhji.pageLoaded["sale_center"]==undefined){
				banhji.router.navigate('/sale_center');
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
		}
	});
	banhji.router.route("/price_list/:id", function(id){
		if(!auth.getLogin()){
			banhji.router.navigate('/login');
		}else{
			if(banhji.pageLoaded["sale_center"]==undefined){
				banhji.router.navigate('/sale_center');
			}else{
				var vm = banhji.priceList;
				
				banhji.view.layout.showIn("#content", banhji.view.priceList);

				vm.pageLoad(id);			
				
				if(banhji.pageLoaded["price_list"]==undefined){
					banhji.pageLoaded["price_list"] = true;

					
				}
			}	
		}
	});
	banhji.router.route("/products", function(){
		if(!auth.getLogin()){
			banhji.router.navigate('/login');
		}else{
			if(banhji.pageLoaded["sale_center"]==undefined){
				banhji.router.navigate('/sale_center');
			}else{
				var vm = banhji.product;				
				
				banhji.view.layout.showIn("#content", banhji.view.product);
				vm.pageLoad();			
				
				if(banhji.pageLoaded["products"]==undefined){
					banhji.pageLoaded["products"] = true;
					
					vm.vendorDS.filter({ field:"contact_type_id", value: 5 });
				}
			}	
		}
	});
	banhji.router.route("/new_stock/:id", function(id){
		if(!auth.getLogin()){
			banhji.router.navigate('/login');
		}else{
			if(banhji.pageLoaded["sale_center"]==undefined){
				banhji.router.navigate('/sale_center');
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
		}
	});
	banhji.router.route("/bills(/:id)", function(id){
		if(!auth.getLogin()){
			banhji.router.navigate('/login');
		}else{
			if(banhji.pageLoaded["sale_center"]==undefined){
				banhji.router.navigate('/sale_center');
			}else{
				var vm = banhji.bill;
				banhji.view.layout.showIn("#content", banhji.view.bill);

				vm.pageLoad(id);

				if(banhji.pageLoaded["bills"]==undefined){
					banhji.pageLoaded["bills"] = true;				

					$("#ddlCustomer").kendoComboBox({
	                    placeholder: "ឈ្មោះ...",
	                    dataTextField: "fullIdName",
	                    dataValueField: "id",
	                    filter: "search",
	                    autoBind: false,
	                    minLength: 3,
	                    dataSource: vm.contactSearchDS,
	                    change: function(e) {
						    var value = this.value();

						    if(value!==""){
						    	vm.loadContact(value);
							}else{							
								vm.removeSearch();
							}
						}
	                });

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
		}
	});
	banhji.router.route("/payments(/:id)", function(id){
		if(!auth.getLogin()){
			banhji.router.navigate('/login');
		}else{
			// if(banhji.pageLoaded["sale_center"]==undefined){
			// 	banhji.router.navigate('/sale_center');
			// }else{
				var vm = banhji.payment;
				banhji.view.layout.showIn("#content", banhji.view.payment);

				vm.pageLoad(id);

				if(banhji.pageLoaded["payments"]==undefined){
					banhji.pageLoaded["payments"] = true;

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
			//}								
		}
	});	
	banhji.router.route("/invoice_print(/:id)", function(id){
		if(!auth.getLogin()){
			banhji.router.navigate('/login');
		}else{
			if(banhji.pageLoaded["sale_center"]==undefined){
				banhji.router.navigate('/sale_center');
			}else{
				var vm = banhji.invoicePrint;
				banhji.view.layout.showIn("#content", banhji.view.invoicePrint);

				vm.pageLoad(id);
			}					
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
	
	banhji.router.route("/sale_summary", function(){
		if(!auth.getLogin()){
			banhji.router.navigate('/login');
		}else{
			if(banhji.pageLoaded["sale_center"]==undefined){
				banhji.router.navigate('/sale_center');
			}else{			
				banhji.view.layout.showIn("#content", banhji.view.saleSummary);			

				if(banhji.pageLoaded["sale_summary"]==undefined){
					banhji.pageLoaded["sale_summary"] = true;
					
					var vm = banhji.saleSummary;
					vm.loadData([]);
					
					$("#dateSorter").kendoDropDownList({
						dataTextField: "text",
			            dataValueField: "value",
					 	dataSource: [ 
					 		{ text:"ទាំងអស់", value: "all" }, 
					 		{ text:"ថ្ងៃនេះ", value: "today" }, 
					 		{ text:"សប្ដាស៍នេះ", value: "week" }, 
					 		{ text:"ខែនេះ", value: "month" }, 
					 		{ text:"ឆ្នាំនេះ", value: "year" } 
					 	],
					  	change: function(e) {
					    	var value = this.value();
					    	
					    	sorterChanges(value);
					    	dateChanges();
					  	}
					});

					var sdate = $("#startDate").kendoDatePicker({
					    format: "dd-MM-yyyy",
					    change: dateChanges
					}).data("kendoDatePicker");

					var edate = $("#endDate").kendoDatePicker({
					    format: "dd-MM-yyyy",
					    change: dateChanges
					}).data("kendoDatePicker");				

					function dateChanges() {
			            var start = sdate.value(),
			            	end = edate.value();

			            if(start && end){
			            	$("#lblStartDate").text("ចាប់ពីថ្ងៃទី " + kendo.toString(start, "dd-MM-yyyy"));
			            	$("#lblEndDate").text(" ដល់ " + kendo.toString(end, "dd-MM-yyyy"));            	            	
			            }else if(start){
			            	$("#lblStartDate").text("ថ្ងៃទី " + kendo.toString(start, "dd-MM-yyyy"));
			            	$("#lblEndDate").text("");
			            }else if(end){
			            	$("#lblStartDate").text("");
			            	$("#lblEndDate").text("គិតត្រឹម " + kendo.toString(end, "dd-MM-yyyy"));
			            }else{
			            	$("#lblStartDate").text("");
			            	$("#lblEndDate").text("");
			            }
			        }

			        function sorterChanges(value){        	
						switch(value){
						case "today":
							var today = new Date();
							sdate.value(today);
							edate.value(null);
						  					
						  	break;
						case "week":
						  	var thisWeek = new Date;
							var first = thisWeek.getDate() - thisWeek.getDay(); 
							var last = first + 6;

							var firstDayOfWeek = new Date(thisWeek.setDate(first));
							var lastDayOfWeek = new Date(thisWeek.setDate(last));

							sdate.value(firstDayOfWeek);
							edate.value(lastDayOfWeek);
							
						  	break;
						case "month":
							var thisMonth = new Date;				  	
							var firstDayOfMonth = new Date(thisMonth.getFullYear(), thisMonth.getMonth(), 1);
							var lastDayOfMonth = new Date(thisMonth.getFullYear(), thisMonth.getMonth() + 1, 0);

							sdate.value(firstDayOfMonth);
							edate.value(lastDayOfMonth);

						  	break;
						case "year":
							var thisYear = new Date();
						  	var firstDayOfYear = new Date(thisYear.getFullYear(), 0, 1);
							var lastDayOfYear = new Date(thisYear.getFullYear(), 11, 31);

							sdate.value(firstDayOfYear);
							edate.value(lastDayOfYear);

						  	break;
						default:
							sdate.value(null);
							edate.value(null);					  
						}
					}				

					$("#search").click(function(e){
			        	e.preventDefault();

			        	var start = sdate.value(),
			        		end = edate.value(),		        		
			        		para = [];

			        	vm.set("start_date");		        	

			        	//Dates
			        	if(start && end){
			            	para.push({ field:"issued_date >=", value: kendo.toString(start, "yyyy-MM-dd") });
			            	para.push({ field:"issued_date <=", value: kendo.toString(end, "yyyy-MM-dd") });			            	     	            	
			            }else if(start){
			            	para.push({ field:"issued_date", value: kendo.toString(start, "yyyy-MM-dd") });
			            }else if(end){
			            	para.push({ field:"issued_date <=", value: kendo.toString(end, "yyyy-MM-dd") });
			            }else{
			            	
			            }

			            vm.loadData(para);		                      	    		
					});

					//Sale
					$("#goSale").click(function(e){
			        	e.preventDefault();

			        	var start = sdate.value(),
			        		end = edate.value(),		        		
			        		para = [];
			        	
			        	//Dates
			        	if(start && end){
			            	para.push({ field:"issued_date >=", value: kendo.toString(start, "yyyy-MM-dd") });
			            	para.push({ field:"issued_date <=", value: kendo.toString(end, "yyyy-MM-dd") });			            	     	            	
			            }else if(start){
			            	para.push({ field:"issued_date", value: kendo.toString(start, "yyyy-MM-dd") });
			            }else if(end){
			            	para.push({ field:"issued_date <=", value: kendo.toString(end, "yyyy-MM-dd") });
			            }else{
			            	
			            }

			            para.push({ field:"type", operator: "where_in", value: ["invoice","receipt"] });
    					
			            banhji.saleCenter.loadData(para);
			            banhji.router.navigate('/sale_center');		                      	    		
					});

					//Unpaid
					$("#goUnpaid").click(function(e){
			        	e.preventDefault();

			        	var start = sdate.value(),
			        		end = edate.value(),		        		
			        		para = [];
			        	
			        	//Dates
			        	if(start && end){
			            	para.push({ field:"issued_date >=", value: kendo.toString(start, "yyyy-MM-dd") });
			            	para.push({ field:"issued_date <=", value: kendo.toString(end, "yyyy-MM-dd") });			            	     	            	
			            }else if(start){
			            	para.push({ field:"issued_date", value: kendo.toString(start, "yyyy-MM-dd") });
			            }else if(end){
			            	para.push({ field:"issued_date <=", value: kendo.toString(end, "yyyy-MM-dd") });
			            }else{
			            	
			            }

			            para.push({ field:"type", value: "invoice" });
    					para.push({ field:"status", value: 0 });

			            banhji.saleCenter.loadData(para);
			            banhji.router.navigate('/sale_center');		                      	    		
					});

					//Invest
					$("#goInvest").click(function(e){
			        	e.preventDefault();

			        	var start = sdate.value(),
			        		end = edate.value(),		        		
			        		para = [];
			        	
			        	//Dates
			        	if(start && end){
			            	para.push({ field:"issued_date >=", value: kendo.toString(start, "yyyy-MM-dd") });
			            	para.push({ field:"issued_date <=", value: kendo.toString(end, "yyyy-MM-dd") });			            	     	            	
			            }else if(start){
			            	para.push({ field:"issued_date", value: kendo.toString(start, "yyyy-MM-dd") });
			            }else if(end){
			            	para.push({ field:"issued_date <=", value: kendo.toString(end, "yyyy-MM-dd") });
			            }else{
			            	
			            }

			            para.push({ field:"type", value: "invest" });
    				
			            banhji.saleCenter.loadData(para);
			            banhji.router.navigate('/sale_center');		                      	    		
					});

					//Income
					$("#goIncome").click(function(e){
			        	e.preventDefault();

			        	var start = sdate.value(),
			        		end = edate.value(),		        		
			        		para = [];
			        	
			        	//Dates
			        	if(start && end){
			            	para.push({ field:"issued_date >=", value: kendo.toString(start, "yyyy-MM-dd") });
			            	para.push({ field:"issued_date <=", value: kendo.toString(end, "yyyy-MM-dd") });			            	     	            	
			            }else if(start){
			            	para.push({ field:"issued_date", value: kendo.toString(start, "yyyy-MM-dd") });
			            }else if(end){
			            	para.push({ field:"issued_date <=", value: kendo.toString(end, "yyyy-MM-dd") });
			            }else{
			            	
			            }

			            para.push({ field:"type", value: "income" });
    				
			            banhji.saleCenter.loadData(para);
			            banhji.router.navigate('/sale_center');		                      	    		
					});

					//Bill
					$("#goBill").click(function(e){
			        	e.preventDefault();

			        	var start = sdate.value(),
			        		end = edate.value(),		        		
			        		para = [];
			        	
			        	//Dates
			        	if(start && end){
			            	para.push({ field:"issued_date >=", value: kendo.toString(start, "yyyy-MM-dd") });
			            	para.push({ field:"issued_date <=", value: kendo.toString(end, "yyyy-MM-dd") });			            	     	            	
			            }else if(start){
			            	para.push({ field:"issued_date", value: kendo.toString(start, "yyyy-MM-dd") });
			            }else if(end){
			            	para.push({ field:"issued_date <=", value: kendo.toString(end, "yyyy-MM-dd") });
			            }else{
			            	
			            }

			            para.push({ field:"type", value: "bill" });
    				
			            banhji.saleCenter.loadData(para);
			            banhji.router.navigate('/sale_center');		                      	    		
					});

					//Unbill
					$("#goUnbill").click(function(e){
			        	e.preventDefault();

			        	var start = sdate.value(),
			        		end = edate.value(),		        		
			        		para = [];
			        	
			        	//Dates
			        	if(start && end){
			            	para.push({ field:"issued_date >=", value: kendo.toString(start, "yyyy-MM-dd") });
			            	para.push({ field:"issued_date <=", value: kendo.toString(end, "yyyy-MM-dd") });			            	     	            	
			            }else if(start){
			            	para.push({ field:"issued_date", value: kendo.toString(start, "yyyy-MM-dd") });
			            }else if(end){
			            	para.push({ field:"issued_date <=", value: kendo.toString(end, "yyyy-MM-dd") });
			            }else{
			            	
			            }

			            para.push({ field:"type", value: "bill" });
			            para.push({ field:"status", value: 0 });
    				
			            banhji.saleCenter.loadData(para);
			            banhji.router.navigate('/sale_center');		                      	    		
					});

					//Salary
					$("#goSalary").click(function(e){
			        	e.preventDefault();

			        	var start = sdate.value(),
			        		end = edate.value(),		        		
			        		para = [];
			        	
			        	//Dates
			        	if(start && end){
			            	para.push({ field:"issued_date >=", value: kendo.toString(start, "yyyy-MM-dd") });
			            	para.push({ field:"issued_date <=", value: kendo.toString(end, "yyyy-MM-dd") });			            	     	            	
			            }else if(start){
			            	para.push({ field:"issued_date", value: kendo.toString(start, "yyyy-MM-dd") });
			            }else if(end){
			            	para.push({ field:"issued_date <=", value: kendo.toString(end, "yyyy-MM-dd") });
			            }else{
			            	
			            }

			            para.push({ field:"type", value: "salray" });
			               				
			            banhji.saleCenter.loadData(para);
			            banhji.router.navigate('/sale_center');		                      	    		
					});

					//Witdraw
					$("#goWitdraw").click(function(e){
			        	e.preventDefault();

			        	var start = sdate.value(),
			        		end = edate.value(),		        		
			        		para = [];
			        	
			        	//Dates
			        	if(start && end){
			            	para.push({ field:"issued_date >=", value: kendo.toString(start, "yyyy-MM-dd") });
			            	para.push({ field:"issued_date <=", value: kendo.toString(end, "yyyy-MM-dd") });			            	     	            	
			            }else if(start){
			            	para.push({ field:"issued_date", value: kendo.toString(start, "yyyy-MM-dd") });
			            }else if(end){
			            	para.push({ field:"issued_date <=", value: kendo.toString(end, "yyyy-MM-dd") });
			            }else{
			            	
			            }

			            para.push({ field:"type", value: "witdraw" });
			               				
			            banhji.saleCenter.loadData(para);
			            banhji.router.navigate('/sale_center');		                      	    		
					});

					//Expense
					$("#goExpense").click(function(e){
			        	e.preventDefault();

			        	var start = sdate.value(),
			        		end = edate.value(),		        		
			        		para = [];
			        	
			        	//Dates
			        	if(start && end){
			            	para.push({ field:"issued_date >=", value: kendo.toString(start, "yyyy-MM-dd") });
			            	para.push({ field:"issued_date <=", value: kendo.toString(end, "yyyy-MM-dd") });			            	     	            	
			            }else if(start){
			            	para.push({ field:"issued_date", value: kendo.toString(start, "yyyy-MM-dd") });
			            }else if(end){
			            	para.push({ field:"issued_date <=", value: kendo.toString(end, "yyyy-MM-dd") });
			            }else{
			            	
			            }

			            para.push({ field:"type", value: "expense" });
			               				
			            banhji.saleCenter.loadData(para);
			            banhji.router.navigate('/sale_center');		                      	    		
					});
				}
			}								
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
