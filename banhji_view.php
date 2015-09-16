<div id="wrapperApplication" class="container-fluid"></div>

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
						<li id="customer-menu"><a href="#/customers">អតិថិជន</a></li>
						<li id="vendor-menu"><a href="#/vendors">អក្នផ្គត់ផ្គង់</a></li>
						<li id="account-menu"><a href="#/accounts">គណនេយ្យ</a></li>
						<li id="cashier"><a href="#/cashier">បេឡាករ</a></li>
						<li id="electricity-menu"><a href="#/electricity">អគ្គីសនី</a></li>
						<li id="water-menu"><a href="#/water">ទឹកស្អាត</a></li>
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
				<a href="#/accounting">
					<img src="<?php echo base_url(); ?>resources/img/Accounting.png" alt="Accounting">
				</a>
			</li>
			<li>
				<a href="#/inventories">
					<img src="<?php echo base_url(); ?>resources/img/Inventory.png" alt="Inventory">
				</a>
			</li>
			<li>
				<a href="#/transformers">
					<img src="<?php echo base_url(); ?>resources/img/Electricity.png" alt="Electricity">
				</a>
			</li>
			<li>
				<a href="#/water">
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
<!-- vendor start -->
<script type="text/x-kendo-template" id="vendors-tmpl">
	<div class="widget widget-heading-simple widget-body-white widget-employees">				
		<div class="widget-body padding-none">	
			<div class="row-fluid row-merge">
				<div class="span3 listWrapper" style="height: 730px;">
					<div class="innerAll">
						<form autocomplete="off" class="form-inline">
							<div class="widget-search separator bottom">
								<button type="button" class="btn btn-default pull-right" id="search"><i class="icon-search"></i></button>
								<div class="overflow-hidden">
									<input type="search" value="" placeholder="ស្វែងរកត្រងស្វូ" id="searchField">
								</div>
							</div>
							<div class="select2-container" style="width: 100%;">
								<div class="overflow-hidden">
									<select name="" id="searchOptions" style="width: 100%;" tabindex="-1">
										<option value="class_id">Class</option>
						                <option value="name">ឈ្មោះ</option>
									</select>
								</div>
							</div>
						</form>
					</div>
					<span class="results" data-bind="text: dataSource.total"></span>
					<div class="table table-condensed" id="sidebar" style="height: 605px;"
						 data-role="grid" data-bind="source: dataSource" 
						 data-row-template="vendor-list-tmpl"
						 data-columns="[{title: 'ឈ្មោះ'}]"
						 data-selectable=true
						 data-height="600"
						 data-scrollable="{virtual: true}"></div>
				</div>
				<div class="span9 detailsWrapper">
					<div id="displayPane" class="row" style="margin-left: 5px;"></div>					
				</div>
			</div>	
		</div>
	</div>
</script>
<script type="text/x-kendo-template" id="vendor-dashboard-tmpl">	
	<div class="navbar">
		<div class="navbar-inner">
			<ul class="nav">
				<li>
					<a href="#/vendors/u/new">បង្កើតអ្នកផ្គត់ផ្គង</a>
				</li>
				<li>
					<a href="#/vendors/u/report">របាយការណ៍</a>
				</li>
			</ul>
			<ul class="nav pull-right">
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-tasks"></i><b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li>
							<a href="#/bills/purchase/new"><i class="icon-bill"></i> ទិញ</a>
						</li>
						<li>
							<a href="#/bills/expense/new"><i class="icon-bill"></i> ចំណាយ</a>
						</li>
						<li>
							<a href="#/vendors/u/po"><i class="icon-bill"></i> បញ្ជាទិញ</a>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
	<div>
		<div class="span3" data-bind="click: billVM.getOpenPO" style="color: white; font-size: 20px; background-color:Purple; border:0px solid black; padding: 10px;">
			បញ្ជាទិញ
			<br><br>
			<span data-bind="text: billVM.NumOfPO" ></span>
			<span style="font-size: 14px">មិនទាន់ទទួល</span>
		</div>
		<div class="span3" data-bind="click: doNothing" style="color: white; font-size: 20px; background-color:MediumSeaGreen; border:0px solid black; padding: 10px;">
			ចំណាយប្រចាំខែ
			<br><br>
			<span>68989</span>		
			<span style="font-size: 14px"></span>		
		</div>			
		<div class="span3" data-bind="click: getBills" style="color: white; font-size: 20px; background-color:Orange; border:0px solid black; padding: 10px;">
			វិក្កយប័ត្រ
			<br><br>
			<span data-bind="text: billVM.NumOfBill" ></span>
			<span style="font-size: 14px">មិនទាន់ទូទាត់</span>
		</div>
		<div class="span3" data-bind="click: billVM.getOpenInvO" style="color: white; font-size: 20px; background-color:Crimson; border:0px solid black; padding: 10px;">
			វិក្កយប័ត្រ
			<br><br>
			<span data-bind="text: billVM.NumOfBillO" ></span>
			<span style="font-size: 14px">ហួសកំណត់</span>
		</div>	
	</div>
	<div class="span12">
		<div class="span6">
			<a href="#" data-bind="click: doNothing" class="widget-stats widget-stats-4 widget-stats-easy-pie widget-stats-warning">
				<span class="txt">សមតុល្យចុងគ្រា</span>
				<span class="count" data-bind="text: billVM.amountOwed"></span>
				<span class="glyphicons cup"><i></i></span>
				<div class="clearfix"></div>
			</a>
		</div>
		<div class="span6"></div>
	</div>
	<div id="dashboard-container">
		<div data-role="grid" class='table table-bordered span12' 
		     data-bind="source: billVM.dataSource"
		     data-columns="[
		     	{title: '<i class=icon-th-list></i>', width: '30px'},
		     	{field: 'type', title: 'ប្រភេទ', width: '70px'},
		     	{field: 'invoice_number', title: 'យោង', width: '120px'},
		     	{field: 'amount', title: 'ចំនួន'},
		     	{field: 'paid', title: 'បានបង់'},
		     	{title: 'ផុតកំណត់', width: '100px'},
		     	{field: 'status', title: 'ស្ថានភាព', width: '100px'},
		     	{field: 'due_date', title: 'ថ្ងៃបង់', width: '90px'},
		     	{field: 'expected_date', title: 'ថ្ងៃរំពឹងទុក', width: '90px'}
		     ]"
		     data-height="475"
		     data-pageable="{
		     	numeric: false,
		     	messages: {
		     		display: 'បង្ហាញ {0}-{1} នៃ {2}',
		     		empty: 'មិនមានទិន្នន័យ'
		     	}
		     }"
		     data-selectable=true
		     data-no-records="true"
		     data-messages="{noRecords: 'មិនមានទិន្នន័យ'}"
		     data-row-template="vendor-single-bill-list-tmpl"
		     >
		</div>
	</div>	
</script>
<script type="text/x-kendo-template" id="vendor-new-tmpl">
	<div class="container-960">
		<div class="row">
			<div class="span12">
				<div class="widget vendor-form">
				    <div class="widget-head">
				        <h4 class="heading">ពាក្រអ្នកផ្គត់ផ្គង</h4>
				        <span class="pull-right" data-bind="click: close">X</span>
				    </div>
				    <div class="widget-body">
				        <table class="table">
				        	<tr>
				        		<td>ក្រុមហ៊ុន</td>
				        		<td>
				        			<input type="text" id="company" name="company" class="k-textbox" data-bind="value: current.company" required
				        				   validationMessage="ត្រូវការ" />
				        		</td>
				        		<td>ប្រភេទអ្នកផ្គត់ផ្គង</td>
				        		<td><input type="text" name="vendorType" style="width: 220px;" data-role="dropdownlist"
				        				   data-bind="source: contactTypes, value: current.type"
				        				   data-text-field="name"
				        				   data-value-field="id"
				        				   data-auto-bind=false
				        				   data-option-label="&nbsp;" required validationMessage="ត្រូវការ" /></td>
				        	</tr>
				        	<tr>
				        		<td>ជាភាសាឡាតាំង</td>
				        		<td><input type="text" class="k-textbox" data-bind="value: current.company_en" /></td>
				        		<td>គេហទំព័រ</td>
				        		<td><input type="text" class="k-textbox" data-bind="value: current.website" /></td>
				        	</tr>
				        	<tr>
				        		<td>លេខពន្ធ</td>
				        		<td><input type="text" class="k-textbox" data-bind="value: current.vat_no" /></td>
				        		<td>ទូរស័ព្ទ</td>
				        		<td><input type="tel"
				        				   data-role="maskedtextbox"
				        				   data-mask="(855) 000-000-0009"
				        				   data-bind="value: current.phone"
				        				   placeholder="(855) 000-000X"
				        				   required validationMessage="ត្រូវការ" /></td>
				        	</tr>
				        	<tr>
				        		<td>អាស័យដ្ថាន</td>
				        		<td><input type="text" class="k-textbox" data-bind="value: current.address" /></td>
				        		<td>អ៉ីម៉ែល</td>
				        		<td><input type="email" class="k-textbox" data-bind="value: current.email" /></td>
				        	</tr>
				        	<tr>
				        		<td>ប្រភេទអាជិវកម្ម</td>
				        		<td><input type="text" style="width: 220px;" data-role="dropdownlist" 
				        				   data-bind="source: businessType, value: current.business_type"
				        				   data-text-field="type"
				        				   data-value-field="id"
				        				   data-option-label="&nbsp;" required validationMessage="ត្រូវការ" /></td>
				        		<td>អាជិវកម្មក្នុងស្រុក</td>
				        		<td><input type="checkbox" data-bind="checked: current.is_local" /> ម៉ែន</td>			        		
				        	</tr>
				        	<tr>
				        		<td>ជំើរសបង់ប្រាក់ទីមួយ</td>
				        		<td><input type="text" style="width: 220px;" data-role="dropdownlist"
				        				   data-bind="source: paymentOptions, value: current.payment_main, events: { change: selectPaymentOption }"
				        				   data-text-field="name"
				        				   data-value-field="id"
				        				   data-option-label="&nbsp;" required /></td>
				        		<td>រូបិយប័ណ្ដ</td>
				        		<td><input type="text" style="width: 220px;" class="input"
				        				   data-bind="source: currencyDS.dataSource, value: current.currency"
				        				   data-role="dropdownlist"
				        				   data-text-field="code"
				        				   data-value-field="id" required /></td>
				        	</tr>
				        	<tr>
				        		<td>ជំើរសបង់ប្រាក់ទីពីរ</td>
				        		<td><input type="text" style="width: 220px;" data-role="dropdownlist"
				        				   data-bind="source: paymentOptions, value: current.payment_second, events: { change: selectPaymentOption }"
				        				   data-text-field="name"
				        				   data-value-field="id"
				        				   data-option-label="&nbsp;" /></td>
				        		<td>លក្ខខណ្ឌទូទាត់</td>
				        		<td><input type="text" style="width: 220px;" data-role="dropdownlist" 
				        				   data-bind="source: paymentTerm, value: current.payment_term" 
				        				   data-text-field="name"
				        				   data-value-field="id"
				        				   data-option-label="&nbsp;" /></td>
				        	</tr>
				        	<tr>
				        		<td>គណនីអ្នកផ្គត់ផ្គង់</td>
				        		<td><input type="text" style="width: 220px;" data-role="dropdownlist"
				        				   data-bind="source: accountDS.dataStore, value: current.ap"
				        				   data-text-field="name"
				        				   data-value-field="id"
				        				   data-template="accountDropDownList"
				        				   data-option-label="&nbsp;" required /></td>
				        		<td>គណនីចុះតំលៃ</td>
				        		<td><input type="text" style="width: 220px;" data-role="dropdownlist"
				        			 	   data-bind="source: accountDS.dataStore, value: current.purchaseDiscount"
				        			 	   data-text-field="name"
				        				   data-value-field="id"
				        				   data-template="accountDropDownList"
				        				   data-option-label="&nbsp;" /></td>
				        	</tr>
				        	<tr>
				        		<td>គណនីបង់ប្រាក់មុន</td>
				        		<td><input type="text" style="width: 220px;" data-role="dropdownlist" 
				        				   data-bind="source: accountDS.dataStore, value: current.prepaid"
				        				   data-text-field="name"
				        				   data-value-field="id"
				        				   data-template="accountDropDownList"
				        				   data-option-label="&nbsp;" /></td>
				        		<td>ឥណទានអនុញ្ញាត្ត</td>
				        		<td><input type="number" style="width: 220px;" data-role="numerictextbox" 
				        				   data-bind="value: current.credit_limit"
				        				   data-decimals="2"
				        				   data-min="0" /></td>
				        	</tr>
				        	<tr data-bind="visible: paidByBank">
				        		<td>ធនាគារ</td>
				        		<td>
			        				<input type="text" style="width: 220px;" class="input" 
			        					   data-role="dropdownlist" 
			        					   data-bind="source: bankModel.ds, value: current.bank"
			        					   data-value-field="id"
			        					   data-text-field="name" />
				        				
				        		</td>
				        		<td>លេខកុងធនាគារ</td>
				        		<td>
				        			<input type="text" data-bind="value: current.bank_account_number" />
				        		</td>
				        	</tr>
				        	<tr data-bind="visible: paidByBank">
				        		<td>ឈ្មោះកុងធនាគារ</td>
				        		<td><input type="text" class="k-textbox" data-bind="value: current.bank_account_name" /></td>
				        		<td>អាស័យដ្ថានធនាគារ</td>
				        		<td><input type="text" class="k-textbox" data-bind="value: current.bank_address" /></td>
				        	</tr>
				        	<tr data-bind="visible: paidByCheck">
				        		<td>ឈ្មោះលើសែក</td>
				        		<td><input type="text" class="k-textbox" data-bind="value: current.name_on_cheque" /></td>
				        		<td></td>
				        		<td></td>
				        	</tr>
				        	<tr>
				        		<td colspan="4">
				        			<table class="table table-condensed">
										<thead>
											<tr>
												<th width="90" class="center"><span data-bind="click: addPhone"><i class="icon-plus"></i></span></th>
												<th>ឈ្មោះ</th>
												<th>ផ្នែក</th>
												<th>លេខទូស័ព្ទ</th>
												<th>ប្រភេទ</th>
											</tr>
										</thead>
										<tbody data-role="listview" 
													data-bind="source: vendorPhones" 
													data-template="vendor-phone-list-add-tmpl"
										></tbody>
									</table>
				        		</td>
				        	</tr>
				        </table>
				    </div>
				</div>
				<div class="span3 pull-right" data-bind="visible: isEdit, events: {click: remove}" style="color: white; font-size: 20px; background-color:Blue; border:0px solid black; padding: 10px;">
					លុប
					<br><br>
					<span></span>
					<span style="font-size: 14px"></span>
				</div>
				<div class="span3 pull-right" data-bind="click: save" style="color: white; font-size: 20px; background-color:Blue; border:0px solid black; padding: 10px;">
					រក្សាទុក
					<br><br>
					<span></span>
					<span style="font-size: 14px"></span>
				</div>
				<div data-role="notification" id="notification" 
					 data-width="250px" 
					 data-position="{top: 25, right: 10}"></div>
			</div>
		</div>
	</div>
</script>
<script type="text/x-kendo-template" id="vendor-list-tmpl">
	<tr><td>
		<div data-bind="click: selected">
			#if(company) {#
				<span>#=company#</span>
			#}#
		</div>
	</td></tr>
</script>
<script type="text/x-kendo-template" id="accountDropDownList">
	<span>#=code#&nbsp;#=name#</span>
</script>
<script type="text/x-kendo-template" id="vendor-tmpl">
	<div class="navbar">
		<div class="navbar-inner">
			<ul class="nav">
				<li>
					<a href="#/vendors"><i class="icon-dashboard"> </i></a>
				</li>
				<li>
					<a href="#/vendors/u/new">បង្កើតអ្នកផ្គត់ផ្គង</a>
				</li>
			</ul>
			<ul class="nav pull-right">
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-tasks"></i><b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li>
							<a href="#/bills/purchase/new"><i class="icon-bill"></i> ទិញ</a>
						</li>
						<li>
							<a href="#/bills/expense/new"><i class="icon-bill"></i> ចំណាយ</a>
						</li>
						<li>
							<a href="#/vendors/u/po"><i class="icon-bill"></i> បញ្ជាទិញ</a>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span3" data-bind="click: billVM.getOpenPO" style="color: white; font-size: 20px; background-color:Purple; border:0px solid black; padding: 10px;">
			បញ្ជាទិញ
			<br><br>
			<span data-bind="text: billVM.NumOfPO" ></span>
			<span style="font-size: 14px">មិនទាន់ទទួល</span>
		</div>
		<div class="span3" data-bind="click: doNothing" style="color: white; font-size: 20px; background-color:MediumSeaGreen; border:0px solid black; padding: 10px;">
			ចំណាយប្រចាំខែ
			<br><br>
			<span>68989</span>
			<span style="font-size: 14px"></span>			
		</div>
		<div class="span3" data-bind="click: getBills" style="color: white; font-size: 20px; background-color:Orange; border:0px solid black; padding: 10px;">
			វិក្កយប័ត្រ
			<br><br>
			<span data-bind="text: billVM.NumOfBill" ></span>
			<span style="font-size: 14px">មិនទាន់ទូទាត់</span>
		</div>
		<div class="span3" data-bind="click: billVM.getOpenInvO" style="color: white; font-size: 20px; background-color:Crimson; border:0px solid black; padding: 10px;">
			វិក្កយប័ត្រ
			<br><br>
			<span data-bind="text: billVM.NumOfBillO" ></span>
			<span style="font-size: 14px">ហួសកំណត់</span>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span6">
			<a href="#" data-bind="click: doNothing" class="widget-stats widget-stats-4 widget-stats-easy-pie widget-stats-warning">
				<span class="txt">សមតុល្យចុងគ្រាដែលនៅជំពាក់</span>
				<span class="count" data-bind="text: billVM.amountOwed"></span>
				<span class="glyphicons cup"><i></i></span>
				<div class="clearfix"></div>
			</a>
		</div>
		<div class="span6">kjlk</div>
	</div>
	<div class="tabbable">
		<ul class="nav nav-tabs">
	    	<li class="active"><a href="#tab1" data-toggle="tab">កំពុងប្រត្តិប័ត្រការ</a></li>
	    	<li><a href="#tab2" data-toggle="tab">ពតមានលំអិតអ្កផ្គត់ផ្គង់</a></li>
	  	</ul>
	  	<div class="tab-content">
	    	<div class="tab-pane active" id="tab1">
	    		<div data-role="grid" class='table table-bordered' 
	    		     data-bind="source: billVM.dataSource"
	    		     data-columns="[
	    		     	{title: '<i class=icon-th-list></i>', width: '30px'},
	    		     	{field: 'type', title: 'ប្រភេទ', width: '70px'},
	    		     	{field: 'invoice_number', title: 'យោង', width: '120px'},
	    		     	{field: 'amount', title: 'ចំនួន'},
	    		     	{field: 'paid', title: 'បានបង់'},
	    		     	{title: 'ផុតកំណត់', width: '100px'},
	    		     	{field: 'status', title: 'ស្ថានភាព', width: '100px'},
	    		     	{field: 'due_date', title: 'ថ្ងៃបង់', width: '90px'},
	    		     	{field: 'expected_date', title: 'ថ្ងៃរំពឹងទុក', width: '90px'},
	    		     	{title: 'ទូទាត់', width: '60px'}
	    		     ]"
	    		     data-height="420"
	    		     data-pageable="{
	    		     	numeric: false,
	    		     	messages: {
	    		     		display: 'បង្ហាញ {0}-{1} នៃ {2}',
	    		     		empty: 'មិនមានទិន្នន័យ'
	    		     	}
	    		     }"
	    		     data-selectable=true
	    		     data-no-records="true"
	    		     data-messages="{noRecords: 'មិនមានទិន្នន័យ'}"
	    		     data-row-template="vendor-single-bill-list-tmpl"
	    		     >
	    		</div>
	    	</div>
	    	<div class="tab-pane" id="tab2">
		    	<table class="table">
					<thead>
						<tr>
							<th colspan="4">
								អ្នកផ្គត់ផ្គង លេខ&nbsp;<span data-bind="text: current.id"></span>
								<span class="pull-right" data-bind="visible: current, events: {click: edit}"><i class="icon-pencil"></i> កែ</span>
							</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td width="150">ក្រុមហ៊ុន</td>
							<td width="410"><span data-bind="text: current.company"></span></td>
							<td width="150">ជាអក្សរឡាតាំង</td>
							<td width="410"><span data-bind="text: current.company_en"></span></td>
						</tr>
						<tr>
							<td>ប្រភេទអ្នកផ្គត់ផ្គង</td>
							<td><span data-bind="text: current.type.name"></span></td>
							<td>រូបិយប័ណ្</td>
							<td><span data-bind="text: current.currency.code"></span></td>
						</tr>
						<tr>
							<td>ប្រភេទអាជិវកម្ម</td>
							<td><span data-bind="text: current.business_type.type"></span></td>
							<td width="150">លេខពន្ធ</td>
							<td width="410"><span data-bind="text: current.vat_no"></span></td>
						</tr>
						
						<tr>
							<td>ទូរស័ព្ទ</td>
							<td><span data-bind="text: current.phone"></span></td>
							<td>អីម៉ែល</td>
							<td><span data-bind="text: current.email"></span></td>
						</tr>
						<tr>
							<td>គេហទំព័រ</td>
							<td><a data-bind="attr: {href: current.website"><span data-bind="text: current.website"></span></a></td>
							<td>អាស័យដ្ថាន</td>
							<td><span data-bind="text: current.address"></span></td>
						</tr>
						<tr>
							<td>ជំើរសបង់ប្រាក់ទីមួយ</td>
							<td><span data-bind="text: current.payment_main.name"></span></td>
							<td>ជំើរសបង់ប្រាក់ទីពីរ</td>
							<td><span data-bind="text: current.payment_second.name"></span></td>	
						</tr>
						<tr>
							<td>គណនីអ្នកផ្គត់ផ្គង</td>
							<td><span data-bind="text: current.ap.code"></span>-<span data-bind="text: current.ap.name"></span></td>
							<td>គណនីប្រាក់កក់</td>
							<td><span data-bind="text: current.prepaid.code"></span>-<span data-bind="text: current.prepaid.name"></span></td>	
						</tr>
						<tr>
							<td>គណនីអ្នកផ្គត់ផ្គង</td>
							<td><span data-bind="text: current.purchaseDiscount.code"></span>-<span data-bind="text: current.purchaseDiscount.name"></span></td>
							<td>លក្ខខណ្ឌទូទាត់</td>
							<td><span data-bind="text: current.payment_term.name"></span></td>	
						</tr>
						<tr>
							<td>ធនាគារ</td>
							<td><span data-bind="text: current.bank.name"></span></td>
							<td>លេខកុងធនាគារ</td>
							<td><span data-bind="text: current.bank_account_number"></span></td>	
						</tr>
						<tr>
							<td>ឈ្មោះកុងធនាគារ</td>
							<td><span data-bind="text: current.bank_account_name"></span></span></td>
							<td>អាស័យដ្ថានធនាគារ</td>
							<td><span data-bind="text: current.bank_address"></span></td>	
						</tr>
						<tr>
							<td>ឈ្មោះលើសែក</td>
							<td><span data-bind="text: current.name_on_cheque"></span></span></td>
							<td>អាជិវកម្មក្នុងស្រុក</td>
							<td><input type="checkbox" data-bind="checked: current.is_local"></td>	
						</tr>
						<tr>
							<td colspan="4">
								<table class='table'>
									<thead>
										<tr>
											<th>ឈ្មោះ</th>
											<th>ផ្នែក</th>
											<th>លេខទូស័ព្ទ</th>
											<th>ប្រភេទ</th>
										</tr>
									</thead>
									<tbody data-role="listview" data-bind="source: vendorPhones" data-template="vendor-phone-list-tmpl"></tbody>
								</table>
							</td>
						</tr>
					</tbody>
				</table>
	    	</div>
	  	</div>
	</div>
	<div id="vendor-container-tmpl"></div>	
</script>
<script type="text/x-kendo-template" id="vendor-single-bill-list-tmpl">
	<tr>
		<td>
			# if(type === 'po') {#
				<a href="\#/vendors/u/po/#=id#"><i class="icon-th-list"></i></a>
			# } else {#
				<a href="\#/bills/#=type#/#=id#"><i class="icon-th-list"></i></a>
			# } #
		</td>
		<td>
			# if(type=== "po") {#
				បញ្ជាទិញ
			#} else if(type=== "purchase") {#
				ទិញ
			# } else {#
				ចំណាយ
			# } #
		</td>
		<td>
			#=invoice_number#
		</td>
		<td>#=kendo.toString(amount, 'c2')#</td>
		<td>#=kendo.toString(paid, 'c2')#</td>
		<td>
			# if(type=== "po") {#
				---
			#} else {#
				# var today = new Date(); #
				# var due = new Date(due_date); #

				#if(due.getTime() < today.getTime()) { #
					# var milliSecondPerDay = 86400 * 1000; #
					# due.setHours(0,0,0,1); #
					# today.setHours(23,59,59,999); #
					# var diff = today - due; #
					# var days= Math.ceil(diff/milliSecondPerDay); #
					# var week= Math.floor(days/7); #
					# days = days - (week * 2); #
					# startDay = due.getDay(); #
					# endDay = today.getDay(); #
					# if(startDay - endDay > 0) { #
						# days = days - 1; #
					#}#
					#if(startDay == 0 && endDay !=6){#
						# days = days - 1; #
					#}#
					#if(startDay == 6 && endDay !=0){#
						# days = days - 1; #
					#}#
					#if(days  === 1) {#
						0 ថ្ងៃ
					#} else {#
						#= days # ថ្ងៃ
					#}#
					
				#} else {#
					---
				# } #
			# } #
		</td>
		<td>
			# if(status === 'open') {#
				មិនទាន់ទទួល
			# } else if (status === 'partial'){#
				ទូទាត់បានខ្លះ
			# }else {#
				ទូទាត់រួច
			# } #
		</td>
		<td>#:kendo.toString(new Date(due_date), 'dd-MM-yyyy')#</td>
		<td>#:kendo.toString(new Date(expected_date), 'dd-MM-yyyy')#</td>
		<td style="text-align:center">
			#if(type !== 'po') {#
				<input type="checkbox" name="" id=""/>
			#}#
		</td>
	</tr>
</script>
<script type="text/x-kendo-template" id="vendor-phone-list-add-tmpl">
	<tr>
		<td class="center" width="100">
			<span data-bind="click: addPhone"><i class="icon-plus"></i></span>&nbsp;
			<span data-bind="click: removePhone"><i class="icon-minus"></i></span>
		</td>
		<td><input type="text" data-bind="value: name"/></td>
		<td><input type="text" data-role="dropdownlist" 
							   data-bind="source: departments, value: department" 
							   data-text-field="description" 
							   data-value-field="department" /></td>
		<td><input type="text" data-role="maskedtextbox" data-mask="(000) 000-000-0009" data-bind="value: phone"/></td>
		<td><input type="text" data-role="dropdownlist" 
							   data-bind="source: phoneTypes, value: type" 
							   data-text-field="description" 
							   data-value-field="type" /></td>
	</tr>
</script>
<script type="text/x-kendo-template" id="vendor-phone-list-tmpl">
	<tr>
		<td>#=name#</td> 
		<td>#if(department ==='sales'){ # ផ្នែកលក់#} else {# ផ្នែកគណនេយ្យ #}#</td>
		<td>#=phone#</td> 
		<td>#if(type ==='phone'){ # លេខទូស័ព្ទ#} else {# លេខទូស័ព្ទចល័ត #}#</td>
	</tr>
</script>
<script type="text/x-kendo-template" id="vendor-bill-list-tmpl">
	<div class="container-960">
		<div class="row">
			<div class="span12">
				<div class="widget">
				    <div class="widget-head">
				        <h4 class="heading"></h4>
				        <span class="pull-right" data-bind="click: billVM.close">X</span>
				    </div>
				    <div class="widget-body">
				        <table class="table">
				        	<tr>
				        		<td>Vendors</td>
				        		<td><input data-bind="value: getCurrentName"/></td>
				        		<td>Voucher</td>
				        		<td><input type="text" class="input"/></td>
				        	</tr>
				        	<tr>
				        		<td>Date</td>
				        		<td><input type="text" style="width: 220px;" data-role="datepicker" /></td>
				        		<td>Memo</td>
				        		<td><input type="text" class="input"/></td>
				        	</tr>
				        	<tr>
				        		<td>Invoice</td>
				        		<td><input type="text" class="input"/></td>
				        		<td>Date</td>
				        		<td><input type="text" style="width: 220px;" data-role="datepicker" /></td>
				        	</tr>
				        	<tr>
				        		<td>Payment Method:</td>
				        		<td><input type="text" style="width: 220px;" data-role="dropdownlist" /></td>
				        		<td>Account</td>
				        		<td><input type="text" style="width: 220px;" data-role="dropdownlist" /></td>
				        	</tr>
				        	<tr>
				        		<td>Purchase order:</td>
				        		<td><input type="text" class="input"/></td>
				        		<td>Segments:</td>
				        		<td><input type="text" style="width: 220px;" data-role="multiselect" /></td>
				        	</tr>
				        </table>
				    </div>
				</div>
				<table class="table table-bordered table-white">
					<thead>
						<tr style="background-color: #cccccc">
							<th width="20" class="center"><i class="icon-trash"></i></th>
							<th>ឈ្មោះសន្និធិ</th>
							<th>ពិពណ៏នា</th>
							<th>តំលៃ</th>
							<th>ចំនួន</th>
							<th>សរុប</th>
							<th width="20" class="center">ពន្ធ</th>
						</tr>
						<tbody></tbody>
					</thead>
				</table>
				<button data-role="button" class="btn"><i class="icon-plus"></i></button>
				<div class="pull-right span3" style="margin-right: 30px">
					<table class="table table-condensed">
						<tr>
							<td>រូបិយប័ណ្</td>
							<td><input type="text" data-role="dropdownlist" /></td>
						</tr>
						<tr>
							<td>គិតពន្ធ</td>
							<td><input type="checkbox" class="input" /></td>
						</tr>
						<tr>
							<td>ពន្ធ</td>
							<td><span></span></td>
						</tr>
						<tr>
							<td>សរុប</td>
							<td><span></span></td>
						</tr>
						<tr>
							<td>សរុបរួម</td>
							<td><span></span></td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</div>
</script>
<script type="text/x-kendo-template" id="vendors-list-tmpl">
	<div class="container-960">
		<div class="row">
			<div class="span2 offset4">
				<div class="widget">
					<div class="widget-head">
						<h4 class="heading">បញ្ជីអ្នកផ្គត់ផ្គង់</h4>
						<span class="pull-right" data-bind="click: billVM.close">X</span>
					</div>
					<div class="widget-body">
						<div class="input-append">
							<input type="text" class="input span10" data-bind="value: key" />
							<button class="btn" data-bind="click: search"><i class="icon-search"></i></button>
						</div>
						<div id="vendorListView"></div>
					</div>
				</div>				
			</div>
		</div>
	</div>
</script>
<script type="text/x-kendo-template" id="vendors-purchase-form-header-tmpl">
	<div id="bill-header" class="container-960">
		<button data-bind="click: close" class="pull-right">X</button>
		<table class="table bill-form">
			<thead>
				<tr>
					<th colspan="4" style="text-align: center"><h2>ទទួលវិក្កយប័ត្រ</h2></th>
				</tr>
			</thead>
			<tbody>
				<tr>
						<td width="200">ចាយជាសាច់ប្រាក់</td>
						<td><input type="checkbox" data-bind="checked: form.current.paidCash, events: {click: form.getAccount}" /></td>
						<td width="200">គណនី</td>
						<td><input id="accountDropdownlist" type="text" style="width: 220px;"
							data-role="dropdownlist"
							data-bind="source: form.account, value: form.current.account"
							data-text-field="name"
							data-value-field="id"
							data-option-label="រើសយកមួយ" /></td>
				</tr>
				<tr>
					<td>អ្នកផ្គត់ផ្គង</td>
					<td>
						<div class="input-append">
						<input class="span11" type="text" data-bind="value: form.current.vendor.company" required/>
						<button class="btn" data-bind="click: form.getVendor"><i class="icon-search"></i></button>
					</td>
					<td>លេខលិខិតបញ្ជាទិញ</td>
					<td><input type="text" style="width: 220px;" /></td>
				</tr>
				<tr>
					<td>លេខសក្ខីបត្រ័</td>
					<td><input type="text" data-bind="value: form.current.voucher" /></td>
					<td>វិក្កយប័ត្រ</td>
					<td><input type="text" data-bind="value: form.current.invoice_number" /></td>
				</tr>
				<tr>
					<td>ពិពណ៏នា</td>
					<td><input type="text" data-bind="value: form.current.comment" /></td>
					<td>វិធីទូទាត់</td>
					<td><input type="text" style="width: 220px;" /></td>
				</tr>
				<tr>
					<td>ថ្នាក់</td>
					<td><select data-role="multiselect" 
										   data-bind="source: form.classDS, value: form.current.segment" 
										   data-value-field="id" 
										   data-text-field="name"
										   data-placeholder="select"
										   style="width: 220px" /></select></td>
					<td>កាលបរិច្ឆេទ</td>
					<td><input type="text" data-role="datepicker" data-bind="value: form.current.due_date" style="width: 220px;" /></td>
				</tr>
			</tbody>
		</table>
		<table class="table table-condensed">
			<thead style="background-color: darkblue; color: #fff; font-weight: bold">
				<tr>
					<td><i class="icon-plus" data-bind="click: addItem"></i></td>
					<td>ល.រ</td>
					<td>ទំនិញ</td>
					<td>ពិពណ៏នា</td>
					<td>ចំនួន</td>
					<td>តំលៃ</td>
					<td>ទឹកប្រាក់</td>
					<td>ពន្ធអាករ</td>
				</tr>
			</thead>
			<tbody data-role="listview" data-bind="source: itemDS" data-template="vendors-bill-form-purchase-list-tmpl" data-auto-bind=false></tbody>
		</table>
		<div class="pull-left span3">
			<textarea name="" id="notice" data-bind="value: form.current.notice" cols="60" rows="5"></textarea>
		</div>
		<div class="pull-left span3">
			<textarea name="" id="internal-notice" data-bind="value: form.current.internal_notice" cols="60" rows="5"></textarea>
		</div>
		<div class="pull-right span4">
			<table style="width: 100%;">
				<tr style="background-color: #000">
					<td colspan="2"></td>
				</tr>
				<tr>
					<td style="text-align: right; width: 100px;">សរុបរង</td>
					<td><input type='text' data-role="numerictextbox" data-bind="value: form.current.amount" data-format="c2" disabled></td>
				</tr>
				<tr>
					<td style="text-align: right; width: 100px;">ពន្ធ</td>
					<td><span data-bind="text: form.current.taxAmount"></span></td>
				</tr>
				<tr>
					<td style="text-align: right; width: 100px;">សរុបរួម</td>
					<td><span data-bind="text: form.grandTotal"></span></td>
				</tr>
				<tr>
					<td colspan="2"><button class="btn btn-primary btn-block" data-bind="click: save">កត់ត្រា</button></td>
				</tr>
			</table>
		</div>
	</div>
	<div class="notification" data-role="notification" 
					 data-width="250px" 
					 data-position="{top: 25, right: 10}"></div>
</script>
<script type="text/x-kendo-template" id="vendors-bill-form-purchase-list-tmpl">
	<tr>
		<td><i class="icon-trash" data-bind="click: removeItem"></i></td>
		<td><span data-bind="text: number"></span></td>
		<td><input style="width: 100%" type="text" 
				   data-role="dropdownlist" 
				   data-bind="source: itemList, value: item" 
				   data-text-field="name" 
				   data-value-field="id"
				   data-option-label="រើសមួយ" /></td>
		<td><input style="width: 100%" type="text" data-bind="value: item.description" /></td>
		<td><input data-role="numerictextbox" style="width: 140px;" type="text" data-bind="value: unit, events: {change: computeAmount}" /></td>
		<td><input data-role="numerictextbox" style="width: 140px;" type="text" data-bind="value: rate, events: {change: computeAmount}" /></td>
		<td><span data-bind="text: amount"></span></td>
		<td><input type="checkbox" data-bind="checked: isTaxed, events: {click: form.getTax}" /></td>
	</tr>
</script>
<script type="text/x-kendo-template" id="vendors-expense-form-header-tmpl">
	<div id="bill-header" class="container-960">
		<button data-bind="click: close" class="pull-right">X</button>		
		<table class="table bill-form">
			<thead>
				<tr>
					<th colspan="4" style="text-align: center"><h2>ទទួលវិក្កយប័ត្រ</h2></th>
				</tr>
			</thead>
			<tbody>
				<tr>
						<td width="200">ចាយជាសាច់ប្រាក់</td>
						<td><input type="checkbox" data-bind="checked: form.current.paidCash, events: {click: form.getAccount}" /></td>
						<td width="200">គណនី</td>
						<td><input id="accountDropdownlist" type="text" style="width: 220px;"
							data-role="dropdownlist"
							data-bind="source: form.account, value: form.current.account"
							data-text-field="name"
							data-value-field="id"
							data-option-label="រើសយកមួយ" /></td>
				</tr>
				<tr>
					<td>អ្នកផ្គត់ផ្គង</td>
					<td>
						<div class="input-append">
						<input class="span11" type="text" data-bind="value: form.current.vendor.company" required/>
						<button class="btn" data-bind="click: form.getVendor"><i class="icon-search"></i></button>
					</td>
					<td>លេខលិខិតបញ្ជាទិញ</td>
					<td><input type="text" style="width: 220px;" /></td>
				</tr>
				<tr>
					<td>លេខសក្ខីបត្រ័</td>
					<td><input type="text" data-bind="value: form.current.voucher" /></td>
					<td>វិក្កយប័ត្រ</td>
					<td><input type="text" data-bind="value: form.current.invoice_number" /></td>
				</tr>
				<tr>
					<td>ពិពណ៏នា</td>
					<td><input type="text" data-bind="value: form.current.comment" /></td>
					<td>វិធីទូទាត់</td>
					<td><input type="text" style="width: 220px;" /></td>
				</tr>
				<tr>
					<td>ថ្នាក់</td>
					<td><select data-role="multiselect" 
										   data-bind="source: form.classDS, value: form.current.segment" 
										   data-value-field="id" 
										   data-text-field="name"
										   data-placeholder="select"
										   style="width: 220px" /></select></td>
					<td>កាលបរិច្ឆេទ</td>
					<td><input type="text" data-role="datepicker" data-bind="value: form.current.expected_date, events: {change: form.getDue}" style="width: 220px;" /></td>
				</tr>
			</tbody>
		</table>
		<table class="table table-condensed">
			<thead style="background-color: darkblue; color: #fff; font-weight: bold">
				<tr>
					<td><i class="icon-plus" data-bind="click: addItem"></i></td>
					<td>ល.រ</td>
					<td>គណនី</td>
					<td>ពិពណ៏នា</td>
					<td>ចំនួន</td>
					<td>តំលៃ</td>
					<td>ទឹកប្រាក់</td>
					<td>ពន្ធអាករ</td>
				</tr>
			</thead>
			<tbody data-role="listview" data-bind="source: itemDS" data-template="vendors-bill-form-expense-list-tmpl" data-auto-bind=false></tbody>
		</table>
		<div class="pull-left span3">
			<textarea name="" id="notice" data-bind="value: form.current.notice" cols="60" rows="5"></textarea>
		</div>
		<div class="pull-left span3">
			<textarea name="" id="internal-notice" data-bind="value: form.current.internal_notice" cols="60" rows="5"></textarea>
		</div>
		<div class="pull-right span4">
			<table style="width: 100%;">
				<tr style="background-color: #000">
					<td colspan="2"></td>
				</tr>
				<tr>
					<td style="text-align: right; width: 100px;">សរុបរង</td>
					<td><input type='text' data-role="numerictextbox" data-bind="value: form.current.amount" data-format="c2" disabled></td>
				</tr>
				<tr>
					<td style="text-align: right; width: 100px;">ពន្ធ</td>
					<td><span data-bind="text: form.current.taxAmount"></span></td>
				</tr>
				<tr>
					<td style="text-align: right; width: 100px;">សរុបរួម</td>
					<td><span data-bind="text: form.grandTotal"></span></td>
				</tr>
				<tr>
					<td colspan="2"><button class="btn btn-primary btn-block" data-bind="click: save">កត់ត្រា</button></td>
				</tr>
			</table>
		</div>
	</div>
	<div class="notification" data-role="notification" 
					 data-width="250px" 
					 data-position="{top: 25, right: 10}"></div>
</script>
<script type="text/x-kendo-template" id="vendors-bill-form-expense-list-tmpl">
	<tr>
		<td><i class="icon-trash" data-bind="click: removeItem"></i></td>
		<td><span data-bind="text: number"></span></td>
		<td><input style="width: 100%" type="text" 
				   data-role="dropdownlist" 
				   data-bind="source: accountList, value: item" 
				   data-text-field="name" 
				   data-value-field="id"
				   data-option-label="រើសមួយ" /></td>
		<td><input style="width: 100%" type="text" data-bind="value: item.description" /></td>
		<td><input data-role="numerictextbox" style="width: 140px;" type="text" data-bind="value: unit, events: {change: computeAmount}" /></td>
		<td><input data-role="numerictextbox" style="width: 140px;" type="text" data-bind="value: rate, events: {change: computeAmount}" /></td>
		<td><span data-bind="text: amount"></span></td>
		<td><input type="checkbox" data-bind="checked: isTaxed, events: {click: form.getTax}" /></td>
	</tr>
</script>
<script type="text/x-kendo-template" id="accounts-list-tmpl">
	<div class="container-960">
		<div class="row">
			<div class="span3 offset4">
				<div class="widget">
					<div class="widget-head">
						<h4 class="heading">បញ្ជីអ្នកផ្គត់ផ្គង់</h4>
						<span class="pull-right" data-bind="click: billVM.close">X</span>
					</div>
					<div class="widget-body">
						<div class="input-append">
							<input type="text" class="input span10" data-bind="value: key" />
							<button class="btn" data-bind="click: search"><i class="icon-search"></i></button>
						</div>
						<div id="vendorListView"></div>
					</div>
				</div>				
			</div>
		</div>
	</div>
</script>
<script  type="text/x-kendo-template" id="bill-list-container-tmpl">
	<div>
		<div>
			<input type="text" data-role="dropdownlist" 
				   data-bind="source: dateList, events:{change: dateSort}" 
				   data-value-field="id" 
				   data-text-field="name"
				   data-option-label="រើសមួយ" />
			<input type="text" name="from" data-role="datepicker" data-bind="value: from" />
			<input type="text" name="to" data-role="datepicker" data-bind="value: to" />
			<button class="btn btn-primary" type="button" data-bind="click: searchBill"><i class="icon-search"></i></button>
		</div>
	</div>
	<div class="well">
		<table class="table table-condensed">
			<tbody>
				<tr>
					<td>គណនីសាច់ប្រាក់</td>
					<td><input type="text" data-role="dropdownlist" 
				       data-bind="source: accountVM.dataStore, value: cashAccount, events: {open: getCashAccount}" 
				       data-text-field="name" 
				       data-value-field="id" 
				       data-auto-bind=false /></td>
					<td>ពិពណ៏នា</td>
					<td><input type="text" data-bind="value: payment.memo"/></td>
				</tr>
			</tbody>
		</table>
	</div>
	
	<table class="table">
		<thead>
			<tr>
				<th></th>
				<th>វិក្កយប័ត្រ</th>
				<th>សាច់ប្រាក់ដើម</th>
				<th>ស្ថានភាព</th>
				<th>ថ្ងៃបង់</th>
				<th>ហួស</th>
				<th>ទឹកប្រាក់សល់</th>
				<th>បញ្ចុះដំលៃ</th>
				<th></th>
			</tr>
		</thead>
		<tbody data-role="listview" 
			   data-bind="source: paymentArr" 
			   data-auto-bind=false 
			   data-template="bill-list-item-tmpl"></tbody>
	</table>
	<button class="btn" id="payBillBtn" data-bind="click: payThoseBills">បង់ប្រាក់វិក្កយបត្រទាំងនេះ</button>
	<div data-role="notification" class="notification" 
					 data-width="330px" 
					 data-position="{bottom: 10, right: 10}"></div>
</script>
<script  type="text/x-kendo-template" id="bill-list-item-tmpl">
	<tr>
		<td><input type="checkbox" data-bind="checked: makePayment, events: {click: singleBillSelect}" /></td>
		<td><a href="\#/bills/#=reference.id#">#=reference.invoice_number#</a></td>
		<td>#=kendo.toString(reference.amount, 'c2')#</td>
		<td>
			# if(reference.status==='open') {#
				មិនទាន់ទូទាត់
			#} else if(reference.status === 'partial') {#
				ទូទាត់បានខ្លះ
			#} else {#
				ទូទាត់រួច
			#}#
		</td>
		<td>#=reference.due_date#</td>
		<td>
			# var today = new Date(); #
			# var due = new Date(reference.due_date); #

			#if(due.getTime() < today.getTime()) { #
				# var milliSecondPerDay = 86400 * 1000; #
				# due.setHours(0,0,0,1); #
				# today.setHours(23,59,59,999); #
				# var diff = today - due; #
				# var days= Math.ceil(diff/milliSecondPerDay); #
				# var week= Math.floor(days/7); #
				# days = days - (week * 2); #
				# startDay = due.getDay(); #
				# endDay = today.getDay(); #
				# if(startDay - endDay > 0) { #
					# days = days - 1; #
				#}#
				#if(startDay == 0 && endDay !=6){#
					# days = days - 1; #
				#}#
				#if(startDay == 6 && endDay !=0){#
					# days = days - 1; #
				#}#
				#if(days  === 1) {#
					0 ថ្ងៃ
				#} else {#
					#= days # ថ្ងៃ
				#}#
				
			#} else {#
				---
			# } #
		</td>
		<td><input type="text" data-role="numerictextbox" data-bind="value: amount, events: {change: payCommute}" style="width:1500xp;" /></td>
		<td><input type="text" data-role="numerictextbox" data-bind="value: discount" style="width:1500xp;" /></td>
		<td>
			<i class="icon-tasks" data-bind="click: getDetail"></i>
		</td>
	</tr>
</script>
<script type="text/x-kendo-template" id="payment-tmpl">
	<button data-bind="click: close" class="pull-right">X</button>
	<h2>ទូទាត់វិក្កយប័ត្រ</h2>
	<table class="table">
		<tbody>
			<tr>
				<th>គណនីសាច់ប្រាក់:</th>
				<th></th>
				<th>លេខសែក:</th>
				<th></th>
			</tr>
			<tr>
				<th>កាលបរិច្ឆេទទូទាត់:</th>
				<th></th>
				<th>លេខសក្ខីបត្រ័:</th>
				<th></th>
			</tr>
			<tr>
				<th>ថ្នាក់:</th>
				<th></th>
				<th>ពិពណ៍នារួម:</th>
				<th></th>
			</tr>
		</tbody>
	</table>
	<table class="table">
		<thead>
			<tr>
				<th>លេខវិក្កយប័ត្រ</th>
				<th>ទឹកប្រាក់</th>
				<th>បញ្ចុះដំលៃ</th>
				<th>ពិន័យ</th>
				<th>អាត្រាប្រាក់</th>
			</tr>
		</thead>
		<tbody data-role="listview" data-bind="source: DS" data-template="payment-list-tmpl" data-auto-bind=false></tbody>
	</table>
	<button class="btn btn-primary pull-right" data-bind="click: save">រក្សាទុក</button>
</script>
<script type="text/x-kendo-template" id="payment-list-tmpl">
	#if(!id) {#
	<tr>
		<td>#=reference.id#</td>
		<td><input type="text" data-bind="value: amount" /></td>
		<td><input type="text" data-bind="value: discount" /></td>
		<td><input type="text" data-bind="value: fine" /></td>
		<td>#=rate#</td>
	</tr>
	#}#
</script>
<!-- Purchase Order Starts-->
<script type="text/x-kendo-template" id="purchase-order-tmpl">
	<div class="container-960">
		<div class="widget-head">
			<h3 class="heading glyphicons cart_in"><i></i>បញ្ជាទិញ</h3>
		</div>
		<button data-bind="click: close" class="pull-right">X</button>
		<table class="table table-condensed bill-form">
			<tbody>
				<tr>
					<td>លេខលិខិតបញ្ជាទិញ (*)</td>
					<td><input type="text" data-bind="value: current.invoice_number" required /></td>
					<td>កាលបរិច្ឆេទ</td>
					<td><input type="text" data-role="datepicker" data-bind="value: current.due_date" /></td>
				</tr>
				<tr>
					<td>អ្នកផ្គត់ផ្គង (*)</td>
					<td>
						<div class="input-append">
						<input class="span11" type="text" data-bind="value: current.vendor.company" required/>
						<button class="btn" data-bind="click: getVendor"><i class="icon-search"></i></button>
					</td>
					<td>ថ្ងៃរំពឹងទុក</td>
					<td><input type="text" data-role="datepicker" data-bind="value: current.expected_date" /></td>
				</tr>
				<tr>
					<td>ថ្នាក់</td>
					<td><select data-role="multiselect" 
										   data-bind="source: classDS, value: current.segment" 
										   data-value-field="id" 
										   data-text-field="name"
										   data-placeholder="select"
										   style="width: 220px" /></select></td>
					<td>បញ្ជាលក់</td>
					<td><input type="text" disabled/></td>
				</tr>
				<tr>
					<td>អាស័យដ្ថាន</td>
					<td><textarea name="address" id="address" data-bind="value: current.address" cols="30" rows="2"></textarea></td>
					<td>អាស័យដ្ថានដឹកជញ្ជូន</td>
					<td><textarea data-bind="value: current.delivery_address" name="delivery_address" id="delivery_address" cols="30" rows="2"></textarea></td>
				</tr>
			</tbody>
		</table>
		<table class="table table-condensed">
			<thead style="background-color: darkblue; color: #fff; font-weight: bold">
				<tr>
					<td><i class="icon-plus" data-bind="click: addItem"></i></td>
					<td>ល.រ</td>
					<td>ទំនិញ</td>
					<td>ពិពណ៏នា</td>
					<td>ចំនួន</td>
					<td>តំលៃ</td>
					<td>ទឹកប្រាក់</td>
					<td>ពន្ធអាករ</td>
				</tr>
			</thead>
			<tbody data-role="listview" data-bind="source: itemDS.ds" data-template="po-list-template" data-auto-bind=false></tbody>
		</table>
		<div class="pull-left span3">
			<textarea name="" id="notice" data-bind="value: current.notice" cols="60" rows="5"></textarea>
		</div>
		<div class="pull-left span3">
			<textarea name="" id="internal-notice" data-bind="value: current.internal_notice" cols="60" rows="5"></textarea>
		</div>
		<div class="pull-right span4">
			<table style="width: 100%;">
				<tr style="background-color: #000">
					<td colspan="2"></td>
				</tr>
				<tr>
					<td style="text-align: right; width: 100px;">សរុបរង</td>
					<td><input type='text' data-role="numerictextbox" data-bind="value: current.amount" data-format="c2" disabled></td>
				</tr>
				<tr>
					<td style="text-align: right; width: 100px;">ពន្ធ</td>
					<td><span data-bind="text: current.taxAmount"></span></td>
				</tr>
				<tr>
					<td style="text-align: right; width: 100px;">សរុបរួម</td>
					<td><span data-bind="text: grandTotal"></span></td>
				</tr>
				<tr>
					<td colspan="2"><button class="btn btn-primary btn-block" data-bind="click: save">កត់ត្រា</button></td>
				</tr>
			</table>
		</div>
	</div>
	<div class="notification" data-role="notification" 
					 data-width="250px" 
					 data-position="{top: 25, right: 10}"></div>
</script>
<script type="text/x-kendo-template" id="po-list-template">
	<tr>
		<td><i class="icon-trash" data-bind="click: removeItem"></i></td>
		<td><span data-bind="text: number"></span></td>
		<td><input style="width: 100%" type="text" 
				   data-role="dropdownlist" 
				   data-bind="source: itemList, value: item" 
				   data-text-field="name" 
				   data-value-field="id"
				   data-option-label="រើសមួយ" /></td>
		<td><input style="width: 100%" type="text" data-bind="value: item.description" /></td>
		<td><input data-role="numerictextbox" style="width: 140px;" type="text" data-bind="value: unit, events: {change: computeAmount}" /></td>
		<td><input data-role="numerictextbox" style="width: 140px;" type="text" data-bind="value: rate, events: {change: computeAmount}" /></td>
		<td><span data-bind="text: amount"></span></td>
		<td><input type="checkbox" data-bind="checked: isTaxed, events: {click: getTax}" /></td>
	</tr>
</script>
<!-- Purchase Order ends -->
<!-- vendor end -->
<!-- Accounting Section Starts -->
<script type="text/x-kendo-template" id="accounting-dashboard-tmpl">
	<div class="container-fluid">
		<div class="row">
			<div class="span3">
				<div id="accountChart" class="table table-bordered"
					 data-role="grid"
					 data-bind="source: accounts.dataStore"
					 data-columns="[{title: 'គណនី'}]"
					 data-selectable=true
					 data-row-template="accountChartTmpl"
					 data-scrollable=true
					 data-height="500"
					 data-pageable=true></div>
			</div>
			<div class="span9">
				<div class="navbar">
					<div class="navbar-inner">
						<ul class="nav">
							<li>
								<a href="#/accounts"><i class="icon-dashboard"> </i></a>
							</li>
							<li>
								<a href="#/vendors/u/new">បង្កើតគណនី</a>
							</li>
							<li>
								<a href="#/vendors/u/new">បញ្ជី</a>
							</li>
							<li>
								<a href="#/vendors/u/new">ចំណាត់ថ្នាក់</a>
							</li>
							<li>
								<a href="#/vendors/u/new">កត់ត្រាទិន្នានុប្បវត្តិ</a>
							</li>
						</ul>
						<ul class="nav pull-right">
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-tasks"></i><b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li>
										<a href="#/bills/purchase/new"><i class="icon-bill"></i> income Statement</a>
									</li>
									<li>
										<a href="#/bills/expense/new"><i class="icon-bill"></i> Balance Sheet</a>
									</li>
									<li>
										<a href="#/vendors/u/po"><i class="icon-bill"></i> បញ្ជាទិញ</a>
									</li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</script>
<script type="text/x-kendo-template" id="accountChartTmpl">
	<tr data-bind="click: selected">
		<td>#=code# - #=name#</td>
	</tr>
</script>
<script type="text/x-kendo-template" id="account-new-tmpl">
		<div class="span3 offset5">
			<table class="table">
				<tr>
					<td>ប្រភេទ:</td>
					<td><input type="text" data-role="dropdownlist" data-bind="source: types, value: current.type" data-text-field="name" data-value-field="id" /></td>
				</tr>
				<tr>
					<td>ប្រភេទ:</td>
					<td><input type="text" data-bind="value: current.parentAccount.name" />
					<button data-bind="click: selectModal">Get</button></td>
				</tr>
				<tr>
					<td>កូដ:</td>
					<td><input type="text" data-bind="value: current.code" /></td>
				</tr>
				<tr>
					<td>គណនី:</td>
					<td><input type="text" data-bind="value: current.name" /></td>
				</tr>
				<tr>
					<td>គណនីជាភាសាអង្គេស:</td>
					<td><input type="text" data-bind="value: current.name_en" /></td>
				</tr>
				<tr>
					<td>ពិពណ៏នា:</td>
					<td><input type="text" data-bind="value: current.description" /></td>
				</tr>
			</table>
			<button class="btn" data-bind="click: save">រក្សាទុក</button>
		</div>
</script>
<script type="text/x-kendo-template" id="parent-account-tmpl">
	<tr>
		<td>#=code# - #=name#</td>
	</tr>
</script>
<script type="text/x-kendo-template" id="journal-account-tmpl">
	<div class="container">
		<div class="row">
			<div class="span12">
				<div class="well">
					<span>សក្ខីប័ត្រ</span>
					<input type="text" data-bind="value: current.voucher" />
				</div>
				<table class="table">
					<thead>
						<tr>
							<th>គណនី</th>
							<th>ឥណពន្ធ (Dr.)</th>
							<th>ឥណទាន (Cr.)</th>
							<th>Class</th>
							<th>ពិពណ៍នា</th>
							<th><button data-bind="click: addEntry">+</button></th>
						</tr>
					</thead>
					<tbody data-role="listview" data-bind="source: entries" data-template="journal-entry-account-tmpl">
					</tbody>
					<tfoot>
						<tr>
							<td></td>
							<td><span data-bind="text: debit"></span></td>
							<td><span data-bind="text: credit"></span></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
					</tfoot>
				</table>
				<button class="pull-right" data-bind="click: save">កត់ត្រា</button>
			</div>
		</div>
	</div>
</script>
<script type="text/x-kendo-template" id="journal-entry-account-tmpl">
	<tr>
		<td>
			<input type="text" data-role="dropdownlist" data-bind="source: accountList, value: account" data-auto-bind=false data-text-field="name" data-value-field="id" />
		</td>
		<td><input type="text" style="width: 150px" data-bind="value: debit, events:{change: totalDebit, blur: check}" /></td>
		<td><input type="text" style="width: 150px" data-bind="value: credit, events:{change: totalCredit, blur: check}" /></td>
		<td><select data-role="multiselect" style="width: 150px" 
										   data-bind="source: classDS, value: segment" 
										   data-value-field="id" 
										   data-text-field="name"
										   data-placeholder="select"
										   data-item-template="class-list-tmpl"
										   data-auto-bind=false
										   style="width: 220px" /></select></td>
		<td><input type="text" data-bind="value: memo" /></td>
		<td><i class="icon-trash" data-bind="click: removeEntry"></i></td>
	</tr>
</script>
<script type="text/x-kendo-template" id="class-list-tmpl">
	<span>
		#=name# (#=segment.name#)
	</span>
</script>
<script type="text/x-kendo-template" id="cashier-tmpl">
	<div class="container-960">
		<div class="row">
			<div class="span12">
				<div class="span3" data-bind="click: deposit" style="color: white; font-size: 20px; background-color:Purple; border:0px solid black; padding: 10px;">
					ដាក់ប្រាក់
					<br><br>
					<span></span>
					<span style="font-size: 14px">ដាក់ប្រាក់ពីគណនីផ្សេងៗ</span>
				</div>
				<div class="span3" data-bind="click: transfer" style="color: white; font-size: 20px; background-color:MediumSeaGreen; border:0px solid black; padding: 10px;">
					ផ្ទេប្រា់
					<br><br>
					<span></span>
					<span style="font-size: 14px">ផ្ទេប្រា់ពីគណនីមួយទៅគណនីមួយ</span>			
				</div>
				<div class="span3" data-bind="click: vendor" style="color: white; font-size: 20px; background-color:Orange; border:0px solid black; padding: 10px;">
					ទូទាត់វិក្កយប័ត្រ
					<br><br>
					<span></span>
					<span style="font-size: 14px">ទូទាត់វិក្កយប័ត្រអ្នកផ្គត់ផ្គង់</span>
				</div>
				<div class="span3" data-bind="click: customer" style="color: white; font-size: 20px; background-color:Crimson; border:0px solid black; padding: 10px;">
					ទទួលវិក្កយប័ត្រ
					<br><br>
					<span data-bind="text: billVM.NumOfBillO" ></span>
					<span style="font-size: 14px">ទទួលវិក្កយប័ត្រពីអតិថិជន</span>
				</div>
			</div>
			<div class="span12" style="margin-top: 10px; margin-left: 0">
				<div class="span6" data-bind="click: getBills" style="color: white; font-size: 20px; background-color:Orange; border:0px solid black; padding: 10px;">
					A/P Aging
					<br><br>
					<span></span>
					<span style="font-size: 14px">ទូទាត់វិក្កយប័ត្រអ្នកផ្គត់ផ្គង់</span>
				</div>
				<div class="span6" data-bind="click: billVM.getOpenInvO" style="color: white; font-size: 20px; background-color:MediumSeaGreen; border:0px solid black; padding: 10px;">
					A/R Aging
					<br><br>
					<span data-bind="text: billVM.NumOfBillO" ></span>
					<span style="font-size: 14px">ទទួលវិក្កយប័ត្រពីអតិថិជន</span>
				</div>
			</div>
		</div>
	</div>
</script>
<script type="text/x-kendo-template" id="cashier-deposit-tmpl">
	<div class="container-960">
		<div class="row">
			<div class="span4 offset4">
				<div class="well">
					<button data-bind="click: close" class="pull-right" style="margin-bottom: 10px;">X</button>
					<label for="voucher">លេខសក្ខីបត្រ័</label>
					<input type="text" style="width: 95%" data-bind="value: current.voucher" />
					<i class="icon-plus" data-bind="click: addEntry"></i>
					<ul style="list-style: none; padding: 5px; margin: 0; width: 95%" class="stripe"data-role="listview" data-bind="source: entries" data-template="entry-list"></ul>
					<label for="from">ដាក់ទៅ</label>
					<input type="text" style="width: 98%" data-role="dropdownlist" data-bind="source: accounts, value: from.account" data-value-field="id" data-text-field="name" />
					<label for="description"​ style="margin-top: 10px">ពិពណ៏នា</label>
					<textarea style="width: 95%" name="" id="" cols="30" rows="3" data-bind="value: current.memo"></textarea>
					<button data-bind="click: save" class="btn-default btn-block">រក្សាទុក</button>
				</div>
			</div>
		</div>
	</div>
</script>
<script type="text/x-kendo-template" id="entry-list">
	<li>
	<div class="pull-right">
		<i class="icon-plus" data-bind="click: addEntry"></i><br/>
		<i class="icon-minus" data-bind="click: removeEntry"></i>
	</div>
	<label for="account">ពីគណនី</label>
	<input type="text" style="width: 220px" data-role="dropdownlist" data-bind="source: accounts, value: account" data-text-field="name" data-value-field="id" />
	<label for="amount">ចំនួន</label>
	<input type="text" data-bind="value: amount" />
	<label for="check">សែក</label>
	<input type="text" data-bind="value: check" />
	<label for="description">ពិពណ៏នា</label>
	<input type="text" data-bind="value: memo" />
	<label for="segment">ចំណាត់ថ្នាក់</label>
	<select data-role="multiselect" style="width: 220px" 
		   data-bind="source: segments, value: segment" 
		   data-value-field="id" 
		   data-text-field="name"
		   data-placeholder="select"
		   data-item-template="class-list-tmpl"
		   data-auto-bind=false
		   style="width: 220px" /></select>
	</li>
</script>
<script type="text/x-kendo-template" id="cashier-transfer-tmpl">
	<div class="container-960">
		<div class="row">
			<div class="span4 offset4">
				<div class="well">
					<button data-bind="click: close" class="pull-right" style="margin-bottom: 10px;">X</button>
					<label for="voucher">លេខសក្ខីបត្រ័</label>
					<input type="text" style="width: 95%" data-bind="value: current.voucher" />
					<label for="from">ពីគណនី</label>
					<input type="text" style="width: 98%" data-role="dropdownlist" data-bind="source: accounts, value: from.account" data-value-field="id" data-text-field="name" />
					<label for="description"​ style="margin-top: 10px">ពិពណ៏នា</label>
					<textarea style="width: 95%" name="" id="" cols="30" rows="3" data-bind="value: current.memo"></textarea>
					<i class="icon-plus" data-bind="click: addEntry"></i>
					<ul style="list-style: none; padding: 5px; margin: 0; width: 96%" class="stripe"data-role="listview" data-bind="source: entries" data-template="entry-transfer-list"></ul>
					<button data-bind="click: save" class="btn-default btn-block">រក្សាទុក</button>
				</div>
			</div>
		</div>
	</div>
</script>
<script type="text/x-kendo-template" id="entry-transfer-list">
	<li>
	<div class="pull-right">
		<i class="icon-plus" data-bind="click: addEntry"></i><br/>
		<i class="icon-minus" data-bind="click: removeEntry"></i>
	</div>
	<label for="account">ទៅគណនី</label>
	<input type="text" style="width: 220px" data-role="dropdownlist" data-bind="source: accounts, value: account" data-text-field="name" data-value-field="id" />
	<label for="amount">ចំនួន</label>
	<input type="text" data-bind="value: amount" />
	<label for="check">សែក</label>
	<input type="text" data-bind="value: check" />
	<label for="description">ពិពណ៏នា</label>
	<input type="text" data-bind="value: memo" />
	<label for="segment">ចំណាត់ថ្នាក់</label>
	<select data-role="multiselect" style="width: 220px" 
		   data-bind="source: segments, value: segment" 
		   data-value-field="id" 
		   data-text-field="name"
		   data-placeholder="select"
		   data-item-template="class-list-tmpl"
		   data-auto-bind=false
		   style="width: 220px" /></select>
	</li>
</script>
<!-- Accounting Section Ends -->

<!-- Dawine Section -->
<!-- template section starts -->
<script type="text/x-kendo-template" id="layout">
	<div class="container-fluid menu-hidden sidebar-hidden-phone fluid menu-left hidden-print">
		<div class="navbar main" id="main-menu">
			<ul class="topnav">
				<li class="dropdown dd-1 span3">
					<a href="\#" class="dropdown-toggle" data-toggle="dropdown" id="brand-menu">Banhji <span id="current-section"></span></a>
					<ul class="dropdown-menu" id="dropdownMenu">
						<li id="home-menu"><a href="#">គេហទំព័រ</a></li>
						<li id="customer-menu"><a href="#/customer">អតិថិជន</a></li>
						<li id="vendor-menu"><a href="#/vendor">អក្នផ្គត់ផ្គង់</a></li>
						<li id="account-menu"><a href="#/accounting">គណនេយ្យ</a></li>
						<li id="electricity-menu"><a href="#/electricity">អគ្គីសនី</a></li>
						<li id="water-menu"><a href="#/water">ទឹកស្អាត</a></li>
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
	<div id="content"></div>
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
		<ul>
			<li>
				<a href="#/customers">
					<h3>CUSTOMERS</h3>
				</a>
			</li>
			<li>
				<a href="#/customer">
					<h3>NEW CUSTOMER</h3>
				</a>
			</li>
			<li>
				<a href="#/meter/1">
					<h3>METERS</h3>
				</a>
			</li>
			<li>
				<a href="#/reading/1">
					<h3>READINGS</h3>
				</a>
			</li>
			<li>
				<a href="#/uInvoice/1">
					<h3>INVOICES</h3>
				</a>
			</li>
			<li>
				<a href="#/uInvoice_print/1">
					<h3>PRINTS</h3>
				</a>
			</li>
			<li>
				<a href="#/cashier">
					<h3>CASHIER</h3>
				</a>
			</li>			
			<li>				
				<h3>REPORTS</h3>				
				<ul>
					<li>
						<a href="#/customer_list">
							<h4>Customer List</h4>
						</a>
					</li>
					<li>
						<a href="#/payment_summary">
							<h4>Sale & Payment Summary</h4>
						</a>
					</li>
					<li>
						<a href="#/payment_detail">
							<h4>Payment Detail</h4>
						</a>
					</li>					
				</ul>
			</li>			
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

<!-- DAWINE -->
<script id="customerCenter" type="text/x-kendo-template">
	<div class="container-fluid">		
		<div class="span12" id="header"></div>

		<div id="content" class="row">
			<div class="widget widget-heading-simple widget-body-gray widget-employees">		
				<div class="widget-body padding-none">	
					<div class="row-fluid row-merge">
						<div class="span3 listWrapper" style="height: 500px;">
							<div class="innerAll">
								<div autocomplete="off" class="form-inline">
									<div class="widget-search separator bottom">										
										<button type="button" class="btn btn-default pull-right" data-bind="click: openOptionsWindow"><i class="icon-cog"></i></button>																				
										<button type="button" class="btn btn-default pull-right" data-bind="click: search"><i class="icon-search"></i></button>
										<div class="overflow-hidden">
											<input id="searchField" name="searchField" type="text" data-bind="value: txtSearch, events:{change: search}" placeholder="ស្វែងរក អតិថិជន">
										</div>
									</div>									
								</div>
							</div>

							<div id="options-window" data-role="window" data-visible="false" data-modal="true" data-iframe="true">												    	
					    		<div class="row">
					    			<div class="span2">
					    				<h4>អាជ្ញាបណ្ណ</h4>					    				
					    				<div id="company" data-value-primitive="true" data-bind="value: company_id"></div>
					    			</div>
					    			<div class="span2">
					    				<h4>ប្រភេទអតិថិជន</h4>
					    				<div id="customerType" data-value-primitive="true" data-bind="value: contact_type_id"></div>
					    			</div>
					    			<div class="span2">
					    				<h4>រូបិយ​ប័ណ្ណ</h4>
					    				<div id="currency" data-value-primitive="true" data-bind="value: currency_id"></div>
					    			</div>
					    		</div>

					    		<br>
					    		<div align="center">
					    			<span class="k-button" data-bind="click: closeOptionsWindow"><i class="icon-search"></i> ស្វែងរក</span>
					    		</div>					    		
					    	</div>							

							<div id="sidebar"></div>							
						</div>
						<div class="span9 detailsWrapper">
							<div class="innerLR">
								<div class="navbar" data-bind="visible: showMenu">
									<div class="navbar-inner">					
										<ul class="nav">											
											<li><a href="#" data-bind="click: goDashBoard"><i class="icon-home"></i></a></li>
											<li><a href="#" data-bind="click: goCustomerDashBoard">ប្រតិបត្តិការ</a></li>
											<li><a href="#" data-bind="click: goDetail">ព័តមានលំអិតអថិជន</a></li>
											<li><a href="#" data-bind="click: goStatement">បញ្ជីបំណុល</a></li>
											<li><a href="#/invoice">វិក្កយប័ត្រ</a></li>
											<li><a href="#/receipt">បង្កាន់ដៃលក់</a></li>
											<li><a href="#/estimate">សម្រង់តម្លៃ</a></li>
											<li><a href="#/sale_order">បញ្ជាលក់</a></li>
											<li><a href="#/gdn">លិខិតដឹកជញ្ជូន</a></li>											
										</ul>
									</div>
								</div>
								
								<div id="detail"></div>

							</div>					
						</div>
					</div>	
				</div>
			</div>
		</div>
	</div>
</script>

<script id="customerListTmpl" type="text/x-kendo-template">
	<tr>
		<td>
			<div class="media-body">
				<span class="strong">
					#if(contact_type_id==7 || contact_type_id==8 || contact_type_id==9){#
						#=number# #=company#
					#}else{#
						#=fullIdName#
					#}#					
				</span>
			</div>
		</td>
	</tr>
</script>
<script id="customerDashboard" type="text/x-kendo-template">
	<div class="row-fluid">
		<div class="span12">
			<div id="example" class="k-content">

				<div class="row-fluid">
					<div class="span3" data-bind="click: loadOpenEstimate" style="color: white; font-size: 20px; background-color:Purple; border:0px solid black; padding: 10px;">
						សម្រង់តម្លៃ
						<br><br>
						<span data-bind="text: totalEstimate" ></span>
						<span style="font-size: 14px">មិនទាន់យល់ព្រម</span>
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

					<div class="span3" data-bind="click: loadOverDueInvoice" style="color: white; font-size: 20px; background-color:Crimson; border:0px solid black; padding: 10px;">
						វិក្កយបត្រ
						<br><br>
						<span data-bind="text: totalOverDue" ></span>
						<span style="font-size: 14px">ហួសកំណត់</span>
					</div>		          	
	          	</div>

	          	<div class="row">
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
					<div class="span6">
						<div class="chart" data-role="chart" data-bind="source: monthlySaleList"
							data-auto-bind="false"
						  	data-legend="{position: 'bottom'}"
						  	data-series="[			  				
							  				{ type: 'line', field: 'amt' },
							  				{ type: 'column', field: 'amt' }
						  			   	]"			  	
						  	data-category-Axis="{ field: 'month',			  						   
						  						  labels: { rotation: 0
						  								  } 
												}"
						  	data-value-Axis="{ labels: {format: '0'}, 
							  					min:0, max: 100000, 
							  					majorUnit: 10000,
							  					majorGridLines: { width: 1 }
						  					}"
						  	data-chart-area="{ height: 180 }"
						  	data-tooltip="{ visible: true, format: 'NO' }">
						</div>	
					</div>					
				</div>

				<div>
					<input id="dateSorter" />
					<input id="startDate" placeHolder="ថ្ងៃទី" />
					<input id="endDate" placeHolder="ដល់" />
					<button type="button" id="search" class="btn btn-default"><i class="icon-search"></i></button>				
				</div>

				<table id="grid">	                
	                <thead>
	                    <tr>
	                        <th>កាលបរិច្ឆេទ</th>
	                        <th>ប្រភេទ</th>
	                        <th>លេខកូដ</th>
	                        <th>ទឹកប្រាក់</th>
	                        <th>ស្ថានភាព</th>
	                        <th>ធ្វើការ</th>
	                    </tr>
	                </thead>
	                <tbody>
	                    <tr>
	                        <td></td>
	                    </tr>
	                </tbody>
	            </table>
			</div><!-- //End div example-->
		</div><!-- //End div span12-->
	</div><!-- //End div row-fluid-->
</script>
<script id="statementCollectionRowTemplate" type="text/x-kendo-tmpl">
    <tr>        
        <td>#:kendo.toString(new Date(issued_date), "dd-MM-yyyy")#</td>
        <td>
        	#if(type==="eInvoice"){#								
				វិក្កយបត្រអគ្គីសនី
			#}else if(type==="wInvoice"){#
				វិក្កយបត្រទឹក
			#}else if(type==="Receipt"){#
        		បង្កាន់ដៃលក់ជាសាច់ប្រាក់	       	        		
			#}else if(type==="SO"){#
        		បញ្ជាលក់
        	#}else if(type==="Estimate"){#        		
        		សម្រង់តម្លៃ
        	#}else if(type==="GDN"){#        		
        		លិខិតដឹកជញ្ជូន
        	#}else if(type==="Notice"){#
        		លិខិតរំលឹក
        	#}else if(type==="Payment"){#
        		បង់ប្រាក់
        	#}else{#
        		វិក្កយបត្រ
        	#}#
        </td>
        <td>
        	#if(type==="Invoice"){#								
				<a href="\#invoice/#=id#"><i></i> #=number#</a>	
			#}else if(type==="Receipt"){#
        		<a href="\#receipt/#=id#"><i></i> #=number#</a>        	        		
			#}else if(type==="SO"){#
        		<a href="\#so/#=id#"><i></i> #=number#</a>
        	#}else if(type==="Estimate"){#        		
        		<a href="\#estimate/#=id#"><i></i> #=number#</a>
        	#}else if(type==="GDN"){#        		
        		<a href="\#gdn/#=id#"><i></i> #=number#</a>
        	#}else if(type==="Notice"){#
        		#=number#
        	#}else if(type==="Payment"){#

        	#}else{#
        		#=number#
        	#}#
        </td>
        <td align="right">#:kendo.toString(kendo.parseFloat(amount)/kendo.parseFloat(rate), "c", locale)#</td>
        <td>        	
        	#if(type==="Invoice" || type==="eInvoice" || type==="wInvoice"){#
        		#if(status==="0" || status==="2") {#
        			# var date = new Date(), dueDate = new Date(due_date).getTime(), toDay = new Date(date).getTime(); #
					#if(dueDate < toDay) {#
						លើសកំណត់ #:Math.floor((toDay - dueDate)/(1000*60*60*24))# ថ្ងៃ
					#} else {#
						#:Math.floor((dueDate - toDay)/(1000*60*60*24))# ថ្ងៃនឹងត្រូវទូទាត់
					#}#
				#} else {#
					ទូទាត់រួច
				#}#
        	#}else if(type==="SO" || type==="GDN"){#
        		#if(status==="0"){#
        			មិនទាន់រៀបចំ
        		#}else{#
        			រៀបចំរូច        			
        		#}#
        	#}else if(type==="Estimate"){#        		
        		#if(status==="0"){#
        			មិនទាន់យល់ព្រម
        		#}else{#
        			យល់ព្រម        			
        		#}#
        	#}#			
		</td> 
		<td align="center">
			#if(type==="Invoice"){#
				#if(status==="0" || status==="2"){#					
					<a href="\#cashier/#=id#"><i></i> ទទួលប្រាក់</a>
				#}#
			#}else if(type==="eInvoice"){#
        		#if(status==="0" || status==="2"){#
        			<a href="\#cashier/#=id#"><i></i> ទទួលប្រាក់</a>
        		#}#
        	#}else if(type==="Notice"){#
        		#if(status==="0" || status==="2"){#
        			<a href="\#cashier/#=id#"><i></i> ទទួលប្រាក់</a>
        		#}#
			#}else if(type==="SO"){#
        		#if(status==="0"){#
        			
        		#}#
        	#}else if(type==="Estimate"){#        		
        		#if(status==="0"){#
        			
        		#}#
        	#}else if(type==="GDN"){#        		
        		#if(status==="0"){#
        			
        		#}#
        	#}#
		</td>        
   	</tr>
</script>

<script id="customer" type="text/x-kendo-template">
	<div class="container-fluid">	
		<div class="row-fluid">		    
			<div class="span12">			
				<div id="example" class="k-content">
					<span class="pull-right glyphicons no-js remove_2" 
						onclick="javascript:window.history.back()" data-bind="click: cancel"><i></i></span>
					
					<h3 id="title" align="center"></h3>	
					<br>										
					<div class="row-fluid">
						<div class="span3">										
							<label for="company">អាជ្ញាបណ្ណ <span style="color:red">*</span></label>
							<input id="company" name="company"
								data-bind="value: customer.company_id" 
								required data-required-msg="ត្រូវការ អាជ្ញាបណ្ណ" style="width: 200px;" />												
						</div>							
						<div class="span3">											
							<label for="customerType">ប្រភេទអតិថិជន <span style="color:red">*</span></label>
							<input id="customerType" name="customerType"
								data-bind="value: customer.contact_type_id" 
								required data-required-msg="ត្រូវការ ប្រភេទអតិថិជន" style="width: 200px;" />									            
						</div>
						<div class="span3">
							<label for="customerStatus">ស្ថានភាព <span style="color:red">*</span></label>							              	
		              		<input id="customerStatus" name="customerStatus" data-role="dropdownlist"
			            		data-text-field="name"
           						data-value-field="id"
           						data-value-primitive="true" 
			            		data-bind="source: statusList, value: customer.status"					            							            		
			            		data-option-label="(--- ជ្រើសរើស ---)"
			            		required data-required-msg="ត្រូវការ ស្ថានភាព" style="width: 200px;" />							              	
						</div>								
						<div class="span3">
							<label for="registered_date">ថ្ងៃចុះឈ្មោះ <span style="color:red">*</span></label>
				            <input id="registered_date" name="registered_date" 
				            		data-role="datepicker"			            		
	            					data-bind="value: customer.registered_date" 
	            					data-format="dd-MM-yyyy"
	            					data-parse-formats="yyyy-MM-dd" 
	            					placeholder="ថ្ងែ-ខែ-ឆ្នាំ" required data-required-msg="ត្រូវការ ថ្ងៃចុះឈ្មោះ" style="width: 200px;" />
						</div>																						
					</div>						

					<br>
					<div class="separator line bottom"></div>

					<div class="row-fluid">									
						<div class="span3">						
							<label for="number">លេខកូដ <span style="color:red">*</span></label>
	              			<input id="number" name="number" class="k-textbox"
		              				data-bind="value: customer.number, events: { change: checkExistingNumber }" 
		              				placeholder="e.g. AB0001" required data-required-msg="ត្រូវការ លេខកូដ"
		              				style="width: 200px;" />
		              		<span data-bind="visible: isDuplicateNumber" style="color: red;">លេខកូដនេះបានប្រើប្រាស់រូចហើយ</span>
						</div>
						<div class="span3">
							<label for="surname">គោត្តនាម <span style="color:red">*</span></label>
		              		<input id="surname" name="surname" class="k-textbox" data-bind="value: customer.surname" 
				              		placeholder="ត្រកូល" required data-required-msg="ត្រូវការ គោត្តនាម"
				              		style="width: 200px;" />
						</div>
						<div class="span3">							
							<label for="name">នាម <span style="color:red">*</span></label>
				            <input id="name" name="name" class="k-textbox" data-bind="value: customer.name" 
				              		placeholder="ឈ្មោះ" required data-required-msg="ត្រូវការ នាម"
				              		style="width: 200px;" />
						</div>
						<div class="span3" data-bind="visible: isCompany">
							<label for="companyName">ក្រុមហ៊ុន <span style="color:red">*</span></label>
							<input id="companyName" name="companyName" class="k-textbox" data-bind="enabled: isCompany, value: customer.company"									
									placeholder="e.g. PCG & Partner"
									style="width: 200px;" />	
						</div>										
					</div>

					<br>
					<div class="separator line bottom"></div>

					<div class="row-fluid">					
						<div class="span3">						
				            <label for="currency">រូបិយ​ប័ណ្ណ <span style="color:red">*</span></label>
				            <input id="currency" name="currency"
								data-bind="value: customer.currency_id" 
								required data-required-msg="ត្រូវការ រូបិយ​ប័ណ្ណ" style="width: 200px;" />				            
				        </div>
						<div class="span3">
							<label for="ar">គណនីអតិថិជន <span style="color:red">*</span></label>
							<input id="ar" name="ar"
								data-bind="value: customer.account_receiveable_id" 
								required data-required-msg="ត្រូវការ គណនីអតិថិជន" style="width: 200px;" />				            
						</div>
						<div class="span3">
							<label for="ra">គណនីចំណូល <span style="color:red">*</span></label>
							<input id="ra" name="ra"
								data-bind="value: customer.revenue_account_id" 
								required data-required-msg="ត្រូវការ គណនីចំណូល" style="width: 200px;" />				            
						</div>
						<div class="span3" data-bind="visible: isCompany">
							<label for="vatNo">លេខ VAT</label>								
		            		<input id="vatNo" name="vatNo" class="k-textbox" data-bind="value: customer.vat_no" 
									placeholder="e.g. 01234567897"
									style="width: 200px;" />												
						</div>					
					</div>

					<br>
					<div class="separator line bottom"></div>								
							
					<!-- // Inner Tabs -->
					<div class="row-fluid">								
						<div class="box-generic">
						    <!-- //Tabs Heading -->
						    <div class="tabsbar tabsbar-1">
						        <ul class="row-fluid row-merge">						            
						            <li class="span3 glyphicons circle_info active">
						            	<a href="#tab1" data-toggle="tab"><i></i> <span>ពត័មានទូទៅ</span></a>
						            </li>						            					            
						        </ul>
						    </div>
						    <!-- // Tabs Heading END -->

						    <div class="tab-content">
						        <!-- //INFO -->
						        <div class="tab-pane active" id="tab1">
					            	<table width="100%" cellpadding="5" cellspacing="5">						            	
					            		<tr>
							                <td>ភេទ</td>
							              	<td><select data-role="dropdownlist" data-bind="source: genders, value: customer.gender"></select></td>							              	
							            	<td>លេខទូរស័ព្ទ</td>
							              	<td><input class="k-textbox" data-bind="value: customer.phone" placeholder="e.g. 012 333 444" />
							            </tr>
							            <tr>
							            	<td>ថ្ងៃកំណើត</td>
							              	<td>
							              		<input data-role="datepicker"			            		
					            					data-bind="value: customer.dob" 
					            					data-format="dd-MM-yyyy"
					            					data-parse-formats="yyyy-MM-dd" 
					            					placeholder="ថ្ងែ-ខែ-ឆ្នាំ" />
	            							</td>							              	
							            	<td>អីុម៉ែល</td>
							              	<td><input class="k-textbox" data-bind="value: customer.email" placeholder="e.g. me@email.com" />							            
							            </tr>
							            <tr>
							            	<td>ទីកន្លែងកំណើត</td>
							              	<td><input class="k-textbox" data-bind="value: customer.pob" placeholder="e.g. ផ្ទះ ផ្លូវ ភូមិ សង្កាត់ ខណ្ឌ" />							            	
							            	<td>លេខអត្តសញ្ញាណប័ណ្ណ</td>
							              	<td><input class="k-textbox" data-bind="value: customer.id_number" placeholder="e.g. 123456789" /></td>							            
							            </tr>
							            <tr valign="top">
							            	<td>អាស័យដ្ឋាន</td>
							              	<td><input class="k-textbox" data-bind="value: customer.address" placeholder="e.g. ផ្ទះ ផ្លូវ ភូមិ សង្កាត់ ខណ្ឌ" />							              	
							            	<td>សមាជិកគ្រួសារ</td>
							              	<td><input class="k-textbox" data-bind="value: customer.family_member" placeholder="e.g. 3" /></td>									              							              									              	
							            </tr>
							            <tr valign="top">
							            	<td>សំគាល់</td>
							              	<td><input class="k-textbox" data-bind="value: customer.memo" placeholder="..." /></td>							              								            	
							              	<td>មុខរបរ</td>
							              	<td><input class="k-textbox" data-bind="value: customer.job" placeholder="e.g. គ្រូបង្រៀន" /></td>									              							              									              	
							            </tr>							            							            								            								            			            
							        </table>
					        	</div>
						        <!-- //INFO END -->
						    </div>
						</div>
					</div>											
					
					<!-- //Form actions -->
					<div align="center">
						<div id="status"></div>								
						<button id="save" type="submit" class="btn btn-icon btn-primary glyphicons circle_ok"><i></i> កត់ត្រា</button>
					</div>
					<!-- // Form actions END -->							
				</div> <!-- // End div example-->  
			</div> <!-- // End div span12-->
		</div>		
	</div> <!-- // End div row-fluid-->	
</script>

<!-- Invoice -->
<script id="invoice" type="text/x-kendo-template">
	<div id="slide-form">
		<div class="container-960">
			<div class="row-fluid">
			<div class="span12">
				<div id="example" class="k-content">									
					<div align="right">			        				        	
			        	<button type="button" aria-hidden="true" data-bind="click:closeX">X</button>			        	
					</div>
					<h3 align="center">វិក្កយបត្រ</h3>		        						
					
					<div class="row-fluid">
						<div class="span4">				
							<table cellpadding="2" cellspacing="2">					          
								<tr data-bind="visible: isEdit">				
									<td>លេខវិក្ក​យបត្រ</td>
									<td><input class="k-textbox" data-bind="value: invoice.number" style="width:140px;" readonly /></td>
								</tr>								           
								<tr>
									<td colspan="2">
										អាសយដ្ឋាន
										<br>
										<textarea id="address" cols="0" rows="2" class="k-textbox" style="width:250px" data-bind="value: invoice.address"></textarea>
									</td>
								</tr>
							</table>
						</div>

					    <div class="span4">
					    	<div align="center">
					    		<span class="glyphicons standard circle_ok" data-bind="visible: paid"><i></i> ទូទាត់រួច</span>				    	
					    	</div>
					    </div>

						<div class="span4">
							<table cellpadding="2" cellspacing="2" align="right">
								<tr>
									<td>ថ្ងៃចេញវិក្កយបត្រ</td>
									<td>
										<input id="issuedDate" name="issuedDate" data-role="datepicker" 
												data-bind="value: invoice.issued_date" data-format="dd-MM-yyyy" 
												required data-required-msg="ត្រូវការ ថ្ងៃចេញវិក្កយបត្រ" />
									</td>
								</tr>	
								<tr>
					                <td>កាលកំណត់</td>
					              	<td>
					              		<select data-role="dropdownlist" 
					              				data-text-field="term" data-value-field="id"
					              				data-auto-bind="false"
					              				data-value-primitive="true",					              								              				
					              				data-bind="source: paymentTermList, value: invoice.payment_term_id" 
					              				data-option-label="(--- ជ្រើសរើស ---)"></select>
					              	</td>
					            </tr>				
								<tr>
									<td>ថ្ងៃបង់ប្រាក់</td>
									<td>
										<input id="dueDate" name="dueDate" data-role="datepicker" 
												data-bind="value: invoice.due_date" data-format="dd-MM-yyyy"
												required data-required-msg="ត្រូវការ ថ្ងៃបង់ប្រាក់" />
									</td>
								</tr>													
					            <tr>
					            	<td>
					            		<select data-role="dropdownlist"
					            			data-value-primitive="true"					            			 
					            			data-bind="value: invoice.reference_type, events:{change: loadReference}"
					            			data-option-label="(-- ទាញពី ---)" 
					            			style="width: 120px">
										 	<option value="Estimate">សម្រង់តម្លៃ</option>
										  	<option value="SO">បញ្ជាលក់</option>
										  	<option value="GDN">លិខិតដឹកជញ្ជូន</option>										  	
										</select>					            		
					            	</td>				
									<td>
										<select data-role="dropdownlist"
												data-text-field="number" 
					              				data-value-field="id"
					              				data-auto-bind="false"
					              				data-value-primitive="true" 
					              				data-bind="source: referenceList, value: invoice.reference_id,
					              							enabled: bolReference,
					              							events:{change: referenceChange}" 
					              				data-option-label="(--- ជ្រើសរើស ---)"></select>
									</td>
								</tr>								
							</table>           		          	
					    </div>
					</div>								
					
					<div id="grid" data-role="grid" 
							data-bind="source: invoiceItemList"
						    data-auto-bind="false"	        
						    data-row-template="invoice-row-template"						                           
						    data-columns='[{ title: "", width: 20 },
						       	{ title: "ល.រ", width: 35 },
						           { title: "ទំនិញ", width: 200 },	                     
						           { title: "ពណ៌នា", width: 200 },
						           { title: "ចំនួន", width: 85 },
						           { title: "តំលៃ", width: 115 },	            
						           { title: "ទឹកប្រាក់", width: 80 },
						           { title: "vat", width: 30 }	                    	                    
						           ]'>
					</div>
					<button class="btn btn-inverse" data-bind="click: addNewRow"><i class="icon-plus icon-white"></i></button>
					
					<br>
					
					<div class="row-fluid">				
						<div class="span8">
							សំគាល់:
							<br>
							<textarea id="memo" cols="0" rows="2" class="k-textbox" style="width:250px" data-bind="value: invoice.memo" placeholder="សំគាល់ 1 (សំរាប់អតិថិជន)"></textarea>
							<textarea id="memo2" cols="0" rows="2" class="k-textbox" style="width:250px" data-bind="value: invoice.memo2" placeholder="សំគាល់ 2 (សំរាប់ផ្ទៃក្នុង)"></textarea>
						</div>

						<div class="span4">
							<table width="100%">								
								<tr align="right">
									<td>សរុបរង:</td>
									<td width="50%"><span data-bind="text: sub_total"></span></td>
								</tr>								
								<tr align="right">
									<td align="top">
										<select data-role="dropdownlist" 
												data-text-field="name" data-value-field="id"
												data-value-primitive="true"
												data-auto-bind="false" 
												data-bind="source: vatList, value: invoice.vat_id, events: {change: change}" 
												data-option-label="រើស VAT" style="width:90px"></select>								
									</td>
									<td><span data-bind="text: invoice.vat"></span></td>
								</tr>
								<tr align="right">
									<td>សរុប:</td>
									<td bgcolor="#00BFFF"><span data-bind="text: invoice.amount"></span></td>
								</tr>						
							</table>
						</div>													
					</div>

					<br>

					<div class="row-fluid">				
						<div class="span12" align="right">
							<div id="status"></div>
							<span class="btn btn-primary btn-icon glyphicons print" data-bind="click: linkPrint, visible: isEdit"><i></i> បោះពុម្ព</span>						
							<button id="save" type="submit" class="btn btn-icon btn-primary glyphicons cart_in"><i></i> រៀបចំវិក្កយបត្រ</button>							
						</div>
					</div>
				</div>
			</div>
			</div>
		</div>
	</div>
</script>
<script id="receipt" type="text/x-kendo-template">
	<div class="container-960">
		<div class="row-fluid">
			<div class="span12">
				<div id="example" class="k-content">
					<div align="right">			        				        	
			        	<button type="button" aria-hidden="true" data-bind="click:closeX">X</button>		        	
					</div>
					<h3 align="center">បង្កាន់ដៃលក់</h3>			
					
					<div class="row-fluid">				
						<div class="span8">
							<table cellpadding="2" cellspacing="2">
								<tr data-bind="visible: isEdit">				
									<td>លេខបង្កាន់ដៃលក់</td>
									<td><input class="k-textbox" data-bind="value: invoice.number" style="width:138px;" readonly /></td>
								</tr>
								<tr>
									<td>កាលបរិច្ឆេទ</td>
									<td>
										<input id="issuedDate" name="issuedDate" data-role="datepicker" 
												data-bind="value: invoice.issued_date" data-format="dd-MM-yyyy" 
												required data-required-msg="ត្រូវការ កាលបរិច្ឆេទ" />
									</td>
								</tr>								    
								<tr>
									<td colspan="2">
										អាសយដ្ឋាន
										<br>
										<textarea id="address" cols="0" rows="2" class="k-textbox" style="width:250px" data-bind="value: invoice.address"></textarea>
									</td>
								</tr>
							</table>
						</div>

						<div class="span4">			
							<table cellpadding="2" cellspacing="2" align="right">					
								<tr>
					                <td>វីធីបង់ប្រាក់</td>
					              	<td>
					              		<select id="paymentMethod" name="paymentMethod" data-role="dropdownlist" 
					              				data-text-field="name" data-value-field="id"
					              				data-auto-bind="false"
					              				data-value-primitive="true" 
					              				data-bind="source: paymentMethodList, value: invoice.payment_method_id" 
					              				data-option-label="(--- ជ្រើសរើស ---)"
					              				required data-required-msg="ត្រូវការ វីធីបង់ប្រាក់"></select>
					              	</td>
					            <tr>
								<tr>
					                <td>លេខកូដសែក</td>
					                <td><input id="check_no" class="k-textbox" data-bind="value: invoice.check_no" /></td>
					            <tr>
					            <tr>
									<td>គណនីសាច់ប្រាក់</td>
									<td>
										<select id="cashAccount" name="cashAccount" data-role="combobox" 
												data-text-field="name" data-value-field="id"
												data-value-primitive="true" 
												data-bind="source: cashAccountList, value: invoice.cash_account_id"
												required data-required-msg="ត្រូវការ គណនីសាច់ប្រាក់"></select>
									</td>
								</tr>								
								<tr>
					            	<td>
					            		<select data-role="dropdownlist"
					            			data-value-primitive="true"					            			 
					            			data-bind="value: invoice.reference_type, events:{change: loadReference}"
					            			data-option-label="(-- ទាញពី ---)"
					            			style="width: 120px">
										 	<option value="Estimate">សម្រង់តម្លៃ</option>
										  	<option value="SO">បញ្ជាលក់</option>
										  	<option value="GDN">លិខិតដឹកជញ្ជូន</option>									  	
										</select>					            		
					            	</td>				
									<td>
										<select data-role="dropdownlist"
												data-text-field="number" 
					              				data-value-field="id"
					              				data-auto-bind="false"
					              				data-value-primitive="true" 
					              				data-bind="source: referenceList, value: invoice.reference_id, 
					              							enabled: bolReference,
					              							events:{change: referenceChange}" 
					              				data-option-label="(--- ជ្រើសរើស ---)"></select>
									</td>
								</tr>
							</table>           		          	
					    </div>			    			
					</div>			

					<div id="grid" data-role="grid" 
						data-bind="source: invoiceItemList"
				        data-auto-bind="false" 
				        data-row-template="invoice-row-template"                  
				        data-columns='[{ title: "", width: 20 },
				        	{ title: "ល.រ", width: 35 },
				            { title: "ទំនិញ", width: 200 },	                     
				            { title: "ពណ៌នា", width: 200 },
				            { title: "ចំនួន", width: 85 },
				            { title: "តំលៃ", width: 115 },		            
				            { title: "ទឹកប្រាក់", width: 80 },
				            { title: "vat", width: 30 }	                    	                    
				            ]'>
					</div>
					<button class="btn btn-inverse" data-bind="click: addNewRow"><i class="icon-plus icon-white"></i></button>
					
					<div class="row-fluid">				
						<div class="span8">
							សំគាល់:
							<br>
							<textarea id="memo" cols="0" rows="2" class="k-textbox" style="width:250px" data-bind="value: invoice.memo" placeholder="សំគាល់ 1 (សំរាប់អតិថិជន)"></textarea>
							<textarea id="memo2" cols="0" rows="2" class="k-textbox" style="width:250px" data-bind="value: invoice.memo2" placeholder="សំគាល់ 2 (សំរាប់ផ្ទៃក្នុង)"></textarea>
						</div>

						<div class="span4">
							<table width="100%">								
								<tr align="right">
									<td>សរុបរង:</td>
									<td width="50%"><span data-bind="text: sub_total"></span></td>
								</tr>								
								<tr align="right">
									<td align="top">
										<select data-role="dropdownlist" 
												data-text-field="name" data-value-field="id"
												data-value-primitive="true"
												data-auto-bind="false" 
												data-bind="source: vatList, value: invoice.vat_id, events: {change: change}" 
												data-option-label="រើស VAT" style="width:90px"></select>								
									</td>
									<td><span data-bind="text: invoice.vat"></span></td>
								</tr>
								<tr align="right">
									<td>សរុប:</td>
									<td bgcolor="#00BFFF"><span data-bind="text: invoice.amount"></span></td>
								</tr>						
							</table>
						</div>													
					</div>

					<br>

					<div class="row-fluid">				
						<div class="span12" align="right">
							<div id="status"></div>
							<span class="btn btn-primary btn-icon glyphicons print" data-bind="click: linkPrint, visible: isEdit"><i></i> បោះពុម្ព</span>						
							<button id="save" type="submit" class="btn btn-icon btn-primary glyphicons cart_in"><i></i> រៀបចំបង្កាន់ដៃ</button>
						</div>
					</div>		
				</div><!-- //End div example-->
			</div><!-- //End div span12-->
		</div><!-- //End div row-fluid-->
	</div>
</script>
<script id="estimate" type="text/x-kendo-template">
	<div id="slide-form">
		<div class="container-960">
			<div class="row-fluid">
			<div class="span12">
				<div id="example" class="k-content">
					<div align="right">			        				        	
			        	<button type="button" aria-hidden="true" data-bind="click:closeX">X</button>			        	
					</div>
					<h3 align="center">សម្រង់តម្លៃ</h3>
									
					<div class="row-fluid">
						<div class="span4">				
							<table cellpadding="2" cellspacing="2">					          
								<tr data-bind="visible: isEdit">				
									<td>លេខសម្រង់តម្លៃ</td>
									<td><input class="k-textbox" data-bind="value: invoice.number" style="width:140px;" readonly /></td>
								</tr>								      
								<tr>
									<td colspan="2">
										អាសយដ្ឋាន
										<br>
										<textarea id="address" cols="0" rows="2" class="k-textbox" style="width:250px" data-bind="value: invoice.address"></textarea>
									</td>
								</tr>
							</table>
						</div>

					    <div class="span4">
					    	<div align="center">
					    		<span class="glyphicons standard circle_ok" data-bind="visible: paid"><i></i> ទូទាត់រួច</span>				    	
					    	</div>
					    </div>

						<div class="span4">
							<table cellpadding="2" cellspacing="2" align="right">
								<tr>
									<td>កាលបរិច្ឆេទ</td>
									<td>
										<input id="issuedDate" name="issuedDate" data-role="datepicker" 
												data-bind="value: invoice.issued_date" data-format="dd-MM-yyyy" 
												required data-required-msg="ត្រូវការ កាលបរិច្ឆេទ" />
									</td>
								</tr>
							</table>	         		          	
					    </div>
					</div>
								
					<div id="grid" data-role="grid" 
						data-bind="source: invoiceItemList"
				        data-auto-bind="false"				        
				        data-row-template="invoice-row-template"				                        
				        data-columns='[{ title: "", width: 20 },
				        	{ title: "ល.រ", width: 35 },
				            { title: "ទំនិញ", width: 200 },	                     
				            { title: "ពណ៌នា", width: 200 },
				            { title: "ចំនួន", width: 85 },
				            { title: "តំលៃ", width: 115 },		            
				            { title: "ទឹកប្រាក់", width: 80 },
				            { title: "vat", width: 30 }	                    	                    
				            ]'>
					</div>
					<button class="btn btn-inverse" data-bind="click: addNewRow"><i class="icon-plus icon-white"></i></button>
					
					<br>
					
					<div class="row-fluid">				
						<div class="span8">
							សំគាល់:
							<br>
							<textarea id="memo" cols="0" rows="2" class="k-textbox" style="width:250px" data-bind="value: invoice.memo" placeholder="សំគាល់ 1 (សំរាប់អតិថិជន)"></textarea>
							<textarea id="memo2" cols="0" rows="2" class="k-textbox" style="width:250px" data-bind="value: invoice.memo2" placeholder="សំគាល់ 2 (សំរាប់ផ្ទៃក្នុង)"></textarea>
						</div>

						<div class="span4">
							<table width="100%">								
								<tr align="right">
									<td>សរុបរង:</td>
									<td width="50%"><span data-bind="text: sub_total"></span></td>
								</tr>								
								<tr align="right">
									<td align="top">
										<select data-role="dropdownlist" 
												data-text-field="name" data-value-field="id"
												data-value-primitive="true"
												data-auto-bind="false" 
												data-bind="source: vatList, value: invoice.vat_id, events: {change: change}" 
												data-option-label="រើស VAT" style="width:90px"></select>								
									</td>
									<td><span data-bind="text: invoice.vat"></span></td>
								</tr>
								<tr align="right">
									<td>សរុប:</td>
									<td bgcolor="#00BFFF"><span data-bind="text: invoice.amount"></span></td>
								</tr>						
							</table>
						</div>													
					</div>

					<br>

					<div class="row-fluid">				
						<div class="span12" align="right">
							<div id="status"></div>
							<span class="btn btn-primary btn-icon glyphicons print" data-bind="click: linkPrint, visible: isEdit"><i></i> បោះពុម្ព</span>						
							<button id="save" type="submit" class="btn btn-icon btn-primary glyphicons cart_in"><i></i> រៀបចំសម្រង់តម្លៃ</button>
						</div>
					</div>
				</div>
			</div>
			</div>
		</div>
	</div>
</script>
<script id="so" type="text/x-kendo-template">
	<div id="slide-form">
		<div class="container-960">
			<div class="row-fluid">
			<div class="span12">
				<div id="example" class="k-content">
					<div align="right">			        				        	
			        	<button type="button" aria-hidden="true" data-bind="click:closeX">X</button>			        	
					</div>
					<h3 align="center">បញ្ជាលក់</h3>
									
					<div class="row-fluid">
						<div class="span4">				
							<table cellpadding="2" cellspacing="2">					          
								<tr data-bind="visible: isEdit">				
									<td>លេខបញ្ជាលក់</td>
									<td><input class="k-textbox" data-bind="value: invoice.number" style="width:140px;" readonly /></td>
								</tr>								   
								<tr>
									<td colspan="2">
										អាសយដ្ឋាន
										<br>
										<textarea id="address" cols="0" rows="2" class="k-textbox" style="width:250px" data-bind="value: invoice.address"></textarea>
									</td>
								</tr>
							</table>
						</div>

					    <div class="span4">
					    	<div align="center">
					    		<span class="glyphicons standard circle_ok" data-bind="visible: paid"><i></i> ទូទាត់រួច</span>				    	
					    	</div>
					    </div>

						<div class="span4">
							<table cellpadding="2" cellspacing="2" align="right">
								<tr>
									<td>កាលបរិច្ឆេទ</td>
									<td>
										<input id="issuedDate" name="issuedDate" data-role="datepicker" 
												data-bind="value: invoice.issued_date" data-format="dd-MM-yyyy" 
												required data-required-msg="ត្រូវការ កាលបរិច្ឆេទ" />
									</td>
								</tr>
								<tr>
									<td>ថ្ងៃរំពឹងទុក</td>
									<td>
										<input id="expectedDate" name="expectedDate" data-role="datepicker" 
												data-bind="value: invoice.expected_date" data-format="dd-MM-yyyy" 
												required data-required-msg="ត្រូវការ ថ្ងៃរំពឹងទុក" />
									</td>
								</tr>								
								<tr>
					            	<td>
					            		<select data-role="dropdownlist"					            			 
					            			data-bind="value: invoice.reference_type, events:{change: loadReference}"
					            			data-option-label="(-- ទាញពី ---)"
					            			data-value-primitive="true"
					            			style="width: 120px">
										 	<option value="Estimate">សម្រង់តម្លៃ</option>										  	
										  	<option value="GDN">លិខិតដឹកជញ្ជូន</option>										  	
										</select>					            		
					            	</td>				
									<td>
										<select data-role="dropdownlist"
												data-text-field="number" 
					              				data-value-field="id"
					              				data-value-primitive="true"
					              				data-auto-bind="false" 
					              				data-bind="source: referenceList, value: invoice.reference_id, 
					              							enabled: bolReference,
					              							events:{change: referenceChange}" 
					              				data-option-label="(--- ជ្រើសរើស ---)"></select>
									</td>
								</tr>
							</table>           		          	
					    </div>
					</div>
								
					<div id="grid" data-role="grid" 
						data-bind="source: invoiceItemList"
				        data-auto-bind="false"				        
				        data-row-template="invoice-row-template"				                        
				        data-columns='[{ title: "", width: 20 },
				        	{ title: "ល.រ", width: 35 },
				            { title: "ទំនិញ", width: 200 },	                     
				            { title: "ពណ៌នា", width: 200 },
				            { title: "ចំនួន", width: 85 },
				            { title: "តំលៃ", width: 115 },		            
				            { title: "ទឹកប្រាក់", width: 80 },
				            { title: "vat", width: 30 }	                    	                    
				            ]'>
					</div>
					<button class="btn btn-inverse" data-bind="click: addNewRow"><i class="icon-plus icon-white"></i></button>
					
					<br>
					
					<div class="row-fluid">				
						<div class="span8">
							សំគាល់:
							<br>
							<textarea id="memo" cols="0" rows="2" class="k-textbox" style="width:250px" data-bind="value: invoice.memo" placeholder="សំគាល់ 1 (សំរាប់អតិថិជន)"></textarea>
							<textarea id="memo2" cols="0" rows="2" class="k-textbox" style="width:250px" data-bind="value: invoice.memo2" placeholder="សំគាល់ 2 (សំរាប់ផ្ទៃក្នុង)"></textarea>
						</div>

						<div class="span4">
							<table width="100%">								
								<tr align="right">
									<td>សរុបរង:</td>
									<td width="50%"><span data-bind="text: sub_total"></span></td>
								</tr>								
								<tr align="right">
									<td align="top">
										<select data-role="dropdownlist" 
												data-text-field="name" data-value-field="id"
												data-value-primitive="true"
												data-auto-bind="false" 
												data-bind="source: vatList, value: invoice.vat_id, events: {change: change}" 
												data-option-label="រើស VAT" style="width:90px"></select>								
									</td>
									<td><span data-bind="text: invoice.vat"></span></td>
								</tr>
								<tr align="right">
									<td>សរុប:</td>
									<td bgcolor="#00BFFF"><span data-bind="text: invoice.amount"></span></td>
								</tr>						
							</table>
						</div>													
					</div>

					<br>

					<div class="row-fluid">				
						<div class="span12" align="right">
							<div id="status"></div>
							<span class="btn btn-primary btn-icon glyphicons print" data-bind="click: linkPrint, visible: isEdit"><i></i> បោះពុម្ព</span>						
							<button id="save" type="submit" class="btn btn-icon btn-primary glyphicons cart_in"><i></i> រៀបចំបញ្ជាលក់</button>
						</div>
					</div>
				</div>
			</div>
			</div>
		</div>
	</div>
</script>
<script id="gdn" type="text/x-kendo-template">
	<div id="slide-form">
		<div class="container-960">
			<div class="row-fluid">
			<div class="span12">
				<div id="example" class="k-content">
					<div align="right">			        				        	
			        	<button type="button" aria-hidden="true" data-bind="click:closeX">X</button>			        	
					</div>
					<h3 align="center">លិខិតដឹកជញ្ជូន</h3>
									
					<div class="row-fluid">
						<div class="span4">				
							<table cellpadding="2" cellspacing="2">					          
								<tr data-bind="visible: isEdit">				
									<td>លេខលិខិតដឹកជញ្ជូន</td>
									<td><input class="k-textbox" data-bind="value: invoice.number" style="width:140px;" readonly /></td>
								</tr>								      
								<tr>
									<td colspan="2">
										អាសយដ្ឋាន
										<br>
										<textarea id="memo" cols="0" rows="2" class="k-textbox" style="width:250px" data-bind="value: invoice.address"></textarea>
									</td>
								</tr>
							</table>
						</div>

					    <div class="span4">
					    	<div align="center">
					    		<span class="glyphicons standard circle_ok" data-bind="visible: paid"><i></i> ទូទាត់រួច</span>				    	
					    	</div>
					    </div>

						<div class="span4">
							<table cellpadding="2" cellspacing="2" align="right">
								<tr>
									<td>កាលបរិច្ឆេទ</td>
									<td>
										<input id="issuedDate" name="issuedDate" data-role="datepicker" 
												data-bind="value: invoice.issued_date" data-format="dd-MM-yyyy" 
												required data-required-msg="ត្រូវការ កាលបរិច្ឆេទ" />
									</td>
								</tr>
								<tr>
					            	<td>
					            		<select data-role="dropdownlist"					            			 
					            			data-bind="value: invoice.reference_type, events:{change: loadReference}"
					            			data-option-label="(-- ទាញពី ---)"
					            			data-value-primitive="true" 
					            			style="width: 120px">										 	
										  	<option value="SO">បញ្ជាលក់</option>										  											  	
										</select>					            		
					            	</td>				
									<td>
										<select data-role="dropdownlist"
												data-text-field="number" 
					              				data-value-field="id"
					              				data-auto-bind="false"
					              				data-value-primitive="true" 
					              				data-bind="source: referenceList, value: invoice.reference_id, 
					              							enabled: bolReference,
					              							events:{change: referenceChange}" 
					              				data-option-label="(--- ជ្រើសរើស ---)"></select>
									</td>
								</tr>
							</table>          		          	
					    </div>
					</div>
								
					<div id="grid" data-role="grid" 
						data-bind="source: invoiceItemList"
				        data-auto-bind="false"				        
				        data-row-template="gdn-row-template"				                        
				        data-columns='[{ title: "", width: 20 },
				        	{ title: "ល.រ", width: 35 },
				            { title: "ទំនិញ", width: 200 },	                     
				            { title: "ពណ៌នា", width: 200 },
				            { title: "ចំនួន", width: 85 }				            	                    	                    
				            ]'>
					</div>
					<button class="btn btn-inverse" data-bind="click: addNewRow"><i class="icon-plus icon-white"></i></button>
					
					<br>
					
					<div class="row-fluid">				
						<div class="span8">
							សំគាល់:
							<br>
							<textarea id="memo" cols="0" rows="2" class="k-textbox" style="width:250px" data-bind="value: invoice.memo" placeholder="សំគាល់ 1 (សំរាប់អតិថិជន)"></textarea>
							<textarea id="memo2" cols="0" rows="2" class="k-textbox" style="width:250px" data-bind="value: invoice.memo2" placeholder="សំគាល់ 2 (សំរាប់ផ្ទៃក្នុង)"></textarea>
						</div>

						<div class="span4">
							<table width="100%">								
								<tr align="right">
									<td>សរុប:</td>
									<td><span data-bind="text: totalQuantity"></span></td>
								</tr>														
							</table>
						</div>													
					</div>

					<br>

					<div class="row-fluid">				
						<div class="span12" align="right">
							<div id="status"></div>
							<span class="btn btn-primary btn-icon glyphicons print" data-bind="click: linkPrint, visible: isEdit"><i></i> បោះពុម្ព</span>						
							<button id="save" type="submit" class="btn btn-icon btn-primary glyphicons cart_in"><i></i> រៀបចំវិក្កយបត្រ</button>							
						</div>
					</div>					
				</div>
			</div>
			</div>
		</div>
	</div>
</script>
<script id="invoice-row-template" type="text/x-kendo-tmpl">		
	<tr>		
		<td>
			<i class="icon-trash" data-bind="events: { click: removeRow }"></i>			
		</td>
		<td class="sno">1</td>
		<td>
			<select id="item" name="item" data-role="combobox" 
					data-text-field="name" data-value-field="id" 
					data-bind="source: itemList, value: item_id, events: {change : itemChange}"
					required data-required-msg="ត្រូវការ ទំនិញ" style="width:200px">
			</select>
		</td>		
		<td>
			<input id="description" name="description" type="text" 
					data-bind="value: description" style="margin-bottom: 0;" 
					required data-required-msg="ត្រូវការ ពណ៌នា" />
		</td>
		<td>
			<input id="quantity" name="quantity" data-role="numerictextbox" 
					data-format="n0" data-min="1"
					data-bind="value: quantity, events: {change : change}"
					required data-required-msg="ត្រូវការ ចំនួន" style="width: 80px;" />
		</td>				
		<td>
			<input id="price" name="price" data-role="numerictextbox" 
					data-format="c" data-culture=#:sub_code#
					data-bind="value: unit_price, events: {change : change}" 
					required data-required-msg="ត្រូវការ តំលៃ" style="width: 110px;" />
		</td>		
		<td align="right">			
			#amount = kendo.parseFloat(quantity)*kendo.parseFloat(unit_price)#
			#=kendo.toString(amount, "c", sub_code)#			
		</td>
		<td>
			<input type="checkbox" data-bind="checked: vat, events: {change : change}" />			
		</td>		
    </tr>   
</script>
<script id="gdn-row-template" type="text/x-kendo-tmpl">		
	<tr>		
		<td>
			<i class="icon-trash" data-bind="events: { click: removeRow }"></i>			
		</td>
		<td class="sno">1</td>
		<td>
			<select id="item" name="item" data-role="combobox" 
					data-text-field="name" data-value-field="id" 
					data-bind="source: itemList, value: item_id, events: {change : itemChange}"
					required data-required-msg="ត្រូវការ ទំនិញ" style="width:200px">
			</select>
		</td>		
		<td>
			<input id="description" name="description" type="text" 
					data-bind="value: description" style="margin-bottom: 0;" 
					required data-required-msg="ត្រូវការ ពណ៌នា" />
		</td>
		<td>
			<input id="quantity" name="quantity" data-role="numerictextbox" 
					data-format="n0" data-min="1"
					data-bind="value: quantity, events: {change : change}"
					required data-required-msg="ត្រូវការ ចំនួន" style="width: 80px;" />
		</td>				
    </tr>   
</script>

<!-- Electricity -->
<script id="eMeter" type="text/x-kendo-template">
	<div class="container-fluid">	
		<div class="row-fluid">		    
			<div class="span12">			
				<div id="exampleMain" class="k-content">
					<span class="pull-right glyphicons no-js remove_2" 
						onclick="javascript:window.history.back()"><i></i></span>

					<h3>កុងទ័រ</h3>

					<input id="meters" style="width: 200px" /> |
					<input id="customers" style="width: 200px" />					
					<br><br>

					<div id="meter-window" data-role="window" data-visible="false" data-modal="true" data-resizable="false" data-iframe="true">				    	
					    <div id="example">
					    	<table cellpadding="5" cellspacing="5">			                
				                <tr>
				                  	<td>ប្រភេទ <span style="color:red">*</span></td>
				                  	<td>
				                  		<input id="item" name="item"
				                  			   data-role="dropdownlist"				                  			   
							                   data-auto-bind="false"
							                   data-value-primitive="true"
							                   data-text-field="name"
							                   data-value-field="id"
							                   data-bind="value: meter.item_id, source: itemDS"
							                   data-option-label="(--- ជ្រើសរើស ---)"
				                  			   required data-required-msg="ត្រូវការ ប្រភេទ" />
				                  	</td>
				                  	<td>តំបន់ <span style="color:red">*</span></td>
				                  	<td>
				                  		<input id="location" name="location"				                  				
							                   	data-bind="value: meter.location_id"
							                   	required data-required-msg="ត្រូវការ តំបន់" />
				                  	</td>			                  		                  	                             
				                </tr>
				                <tr>
				                  	<td>លេខកូដកុងទ័រ <span style="color:red">*</span></td>                    
				                  	<td>
				                  		<input id="meterNo" name="meterNo" class="k-textbox" 
				                  				data-bind="value: meter.number" 
				                  				required data-required-msg="ត្រូវការ លេខកូដកុងទ័រ"
				                  				style="width: 160px;" />
				                  	</td>                             
				                	<td>ប្រអប់ <span style="color:red">*</span></td>
				                  	<td>
				                  		<input id="electricityBox" name="electricityBox" 
				                  				disabled="disabled" 
				                  				data-bind="value: meter.electricity_box_id"
				                  				required data-required-msg="ត្រូវការ ប្រអប់" />				                  			                  				                  		
				                  	</td>
				                </tr>
				                <tr>             
				                  	<td></td>
				                  	<td>
				                  		<input type="checkbox" data-bind="checked: meter.cover_sealed" /> សំណគំរបខ្សែ
				                  		<input type="checkbox" data-bind="checked: meter.ear_sealed" /> សំណត្រចៀក			                  		
				                  	</td>
				                  	<td>អំពែ <span style="color:red">*</span></td>
				                	<td>
				                		<input id="ampere" name="ampere"
				                				data-role="dropdownlist"
				                				data-option-label="(--- ជ្រើសរើស ---)"
				                				required data-required-msg="ត្រូវការ អំពែ"
							                   	data-auto-bind="false"
							                   	data-value-primitive="true"
							                   	data-text-field="name"
							                   	data-value-field="id"
							                   	data-bind="value: meter.amperes.id, source: ampereList" />
				                	</td>			                
				                </tr>
				                <tr>
				                	<td>មេគុណ</td>
				                	<td>
				                		<input id="multiplier" name="multiplier"
				                			data-role="numerictextbox" 
				                			data-bind="value: meter.multiplier" 
				                			data-format="#" min="1" step="100" 
				                			placeholder="ឧ.1/10/100/1,000" />
				                	</td>
				                	<td>ចំនួនហ្វា <span style="color:red">*</span></td>
				                  	<td>
				                  		<input id="phase" name="phase"
				                  				data-role="dropdownlist"
				                  				data-option-label="(--- ជ្រើសរើស ---)"
				                  				required data-required-msg="ត្រូវការ ចំនួនហ្វា"
							                   	data-auto-bind="false"
							                   	data-value-primitive="true"
							                   	data-text-field="name"
							                   	data-value-field="id"
							                   	data-bind="value: meter.phases.id, source: phaseList" />
				                  	</td>
				                </tr>
				                <tr>             
				                  	<td>ចំនួនខ្ទង់នាឡិកា <span style="color:red">*</span></td>
				                  	<td>
				                  		<input id="maxNo" name="maxNo" 
				                  				data-role="numerictextbox" 
				                  				data-bind="value: meter.max_number" 
				                  				data-format="n0" min="0" 
				                  				placeholder="ឧ.10,000/100,000" 
				                  				required data-required-msg="ត្រូវការ ចំនួនខ្ទង់នាឡិកា" />
				                  	</td>	                  	  	
				                  	<td>អាំងតង់សីុតេ <span style="color:red">*</span></td>
				                  	<td>
				                  		<input data-role="dropdownlist"
				                  				data-option-label="(--- ជ្រើសរើស ---)"
				                  				required data-required-msg="ត្រូវការ អាំងតង់សីុតេ"
							                   	data-auto-bind="false"
							                   	data-value-primitive="true"
							                   	data-text-field="name"
							                   	data-value-field="id"
							                   	data-bind="value: meter.voltages.id, source: voltageList" />
				                  	</td>                                   
				                </tr>
				                <tr>
				                	<td>ស្ថានភាព <span style="color:red">*</span></td>
				                  	<td>
				                  		<input id="meterStatus" name="meterStatus"
				                  				data-role="dropdownlist"
												data-option-label="(--- ជ្រើសរើស ---)"
												required data-required-msg="ត្រូវការ ស្ថានភាព" 
				                  				data-text-field="name" 
				                  				data-value-field="id" 
				                  				data-value-primitive="true"			                  				
				                  				data-bind="source: statusList, value: meter.status" />
				                  	</td>
				               	  	<td>តំលៃលក់</td>
				                  	<td>
				                  		<input id="tariff" name="tariff"
				                  			   data-role="dropdownlist"
				                  			   data-option-label="(--- ជ្រើសរើស ---)"				                  			   
							                   data-auto-bind="false"
							                   data-value-primitive="true"
							                   data-text-field="name"
							                   data-value-field="id"
							                   data-bind="value: meter.tariffs.id, source: tariffList" />
				                  	</td>			                	
				                </tr>
				                <tr>
				                	<td>REACTIVE OF</td>
				                	<td>
				                		<input id="reactiveOf" name="reactiveOf"
				                			   data-role="dropdownlist"
				                  			   data-option-label="(--- ជ្រើសរើស ---)"			                  			   
							                   data-auto-bind="false"
							                   data-value-primitive="true"
							                   data-text-field="name"
							                   data-value-field="id"
							                   data-bind="value: meter.reactive_of, source: parentMeterList" />
				                	</td>                 	
				                  	<td>លើកលែង</td>
				                  	<td>
				                  		<input id="exemption" name="exemption"
				                  			   data-role="dropdownlist"
				                  			   data-option-label="(--- ជ្រើសរើស ---)"			                  			   
							                   data-auto-bind="false"
							                   data-value-primitive="true"
							                   data-text-field="name"
							                   data-value-field="id"
							                   data-bind="value: meter.exemptions.id, source: exemptionList" />
				                  	</td>	                  	                        
				                </tr>
				                <tr valign="top">
				                	<td>BACKUP OF</td>
				                	<td>
				                		<input id="backupOf" name="backupOf"
				                			   data-role="dropdownlist"
				                  			   data-option-label="(--- ជ្រើសរើស ---)"
							                   data-auto-bind="false"
							                   data-value-primitive="true"
							                   data-text-field="name"
							                   data-value-field="id"
							                   data-bind="value: meter.backup_of, source: parentMeterList" />
				                	</td>
				                	<td>សំគាល់</td>
				                  	<td>
				                  		<textarea name="memo" id="memo" cols="" rows="2" 
				                  				data-bind="value: meter.memo"></textarea>
				                  	</td>
				                </tr>			                		                			                
				          	</table>				          
			          	
			          		<div id="status"></div>
			          		<button id="save" name="save" class="btn btn-primary"><i class="icon-hdd icon-white"></i> កត់ត្រា</button>                                  
			                <button class="btn" data-bind="click: closeMeterWindow"><i class="icon-off"></i> បិទ</button>			                
			          	</div>
				    </div>							
					
		        	<button class="btn btn-inverse" data-bind="click: openMeterWindow"><i class="icon-plus icon-white"></i></button>
					<br>
	            	<div data-role="grid" data-bind="source: dataSource"
				        data-auto-bind="false"								        			        
				        data-row-template="eMeterRowTemplate"				        			                        
				        data-columns='[
				        	{ title: "#កុងទ័រ" },
				            { title: "ប្រភេទ" },								            
				            { title: "ប្រអប់" },
				            { title: "ពត័មាន" },				            
				            { title: "ថ្លៃលក់" },
				            { title: "តួនាទី" },								            
				            { title: "ស្ថានភាព" }	,
				            { title: "", width: 100 }                    	                    
				        ]'></div>				
											
				</div> <!-- // End div example-->  
			</div> <!-- // End div span12-->
		</div>		
	</div> <!-- // End div row-fluid-->	
</script>
<script id="eMeterRowTemplate" type="text/x-kendo-template">	
	<tr>		
		<td>#=number#</td>
		<td>#=item_name#</td>
		<td>#=electricity_box_number#</td>		
		<td>
			<div>#=amperes.name#</div>
			<div>#=phases.name#</div>
			<div>#=voltages.name#</div>
		</td>
		<td>			
			<div>#=tariffs.name!==undefined?tariffs.name:""#</div>
			<div>#=exemptions.name!==undefined?exemptions.name:""#</div>
			<div>#=maintenances.name!==undefined?maintenances.name:""#</div>
		</td>
		<td>
			#if(reactive_of>0){#
				REACTIVE
			#}else if(backup_of>0){#
				BACKUP
			#}else{#
				
			#}#
		</td>
		<td>#:status==1 ? "ប្រើប្រាស់" : "ឈប់ប្រើ"#</td>
		<td align="center">            
			<span class="glyphicons no-js delete" data-bind="click: delete"><i></i></span>
			<span class="glyphicons no-js edit" data-bind="click: edit"><i></i></span>						
		</td>		
	</tr>
</script>

<script id="reading" type="text/x-kendo-template">
	<div class="container-fluid">
		<div class="row-fluid">    
			<div class="span12">
				<div id="example" class="k-content">
					<span class="pull-right glyphicons no-js remove_2" 
						onclick="javascript:window.history.back()"><i></i></span>

					<h3>បញ្ចូលអំនានកុងទ័រ</h3>
					
					<div class="hidden-print">
						<div class="accordion" id="accordion">
						    <!-- //Accordion Item -->
						    <div class="accordion-group">
						        <div class="accordion-heading">
					            	<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse-1">
										បញ្ចូលអំនានដោយផ្ទាល់ដៃ
									</a>
						        </div>
						        <div id="collapse-1" class="accordion-body in collapse" style="height: auto;">
						            <div class="accordion-inner">
						            	<input data-role="datepicker" 
						            			data-bind="value: monthOfSearch" 
						            			data-start="year" data-depth="year" 
						            			data-format="MM-yyyy" placeHolder="ប្រចាំខែ" />						
														
										<input id="company" data-bind="value: company_id, events:{ change: companyChanges" />
						            	<input id="location" disabled="disabled" data-bind="value: location_id" />
						            	|
						            	<input id="meters" data-bind="value: meter_id" />						            							            	
						          					          					          			          		
						          		<button type="button" class="btn btn-default" data-bind="click: search"><i class="icon-search"></i></button>
						          		<button type="button" class="btn btn-default" onclick="javascript:window.print()"><i class="icon-print"></i></button>					          			
						            </div>
						        </div>
						    </div>
						    <!-- // Accordion Item END -->

						    <!-- //Accordion Item -->
						    <div class="accordion-group">
						        <div class="accordion-heading">
					            	<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse-2">
							        	បញ្ចូលអំនានតាម IR Reader
							      	</a>
						        </div>
						        <div id="collapse-2" class="accordion-body collapse" style="height: 0px;">
						            <div class="accordion-inner">
						            	<input id="myFile" type="file" accept="text/csv">
						            	<button type="button" class="k-button btn-info" data-bind="click: readFile">ទាញយកទិន្នន័យ</button>
						            	<button type="button" class="btn btn-default" onclick="javascript:window.print()"><i class="icon-print"></i></button>
						            	<br>
										<span data-bind="text: uploadStatus"></span>
						            </div>
						        </div>
						    </div>
						    <!-- // Accordion Item END -->
						</div>					
					</div>

			        <div align="center">
			        	<h3 data-bind="text: strMonthOf"</h3>
			        	<h4 data-bind="text: strTransformer"></h4>
			        </div>
			        
			        <div class="demo-section">			        
					    <table class="table table-bordered table-striped table-white">
					        <thead>
					            <tr>
					                <th>អតិថិជន</th>
					                <th>ប្រអប់</th>						                
					                <th>កុងទ័រ</th>
					                <th>មេគុណ</th>
					                <th>ជុំថ្មី</th>
					                <th>លេខចាស់</th>
					                <th>លេខថ្មី</th>					                
					                <th class="right">សរុប</th>
					            </tr>
					        </thead>
					        <tbody data-role="listview"
					        		data-auto-bind="false"					        		 
					        		data-template="reading-row-template" 
					        		data-bind="source: dataSource"></tbody>
					        <tfoot data-template="reading-footer-template" 
					        		data-bind="source: this"></tfoot>						        
					    </table>
					    <div id="pager" class="k-pager-wrap"></div>
				    </div>				       
			        
					<br>					

			        <div>
			        	ប្រចាំខែ
			        	<input id="monthOf" name="monthOf" data-role="datepicker" 
				            			data-bind="value: month_of" 
				            			data-start="year" data-depth="year" data-format="MM-yyyy"
				            			required data-required-msg="ត្រូវការ ប្រចាំខែ"
				            			placeholder="ខែ-ឆ្នាំ" />				    
				    	
				    	ថ្ងៃអានចាប់ពី
                        <input type="text" data-role='datepicker' 
                        		id="fromDate" name="fromDate"
                        		data-bind="value: from_date"	            				
                        		data-type="date" data-format="dd-MM-yyyy"
                        		placeholder="ថ្ងៃ-ខែ-ឆ្នាំ"
                        		required data-required-msg="ត្រូវការ ថ្ងៃអានចាប់ពី"  />                        	    				        
			            
			            ដល់
                        <input type="text" data-role='datepicker' 
                        		id ="toDate" name="toDate"
                        		data-bind="value: to_date"	            				 
                        		data-type="date" data-format="dd-MM-yyyy"
                        		placeholder="ថ្ងៃ-ខែ-ឆ្នាំ"
                        		required data-required-msg="ដល់ថ្ងៃណា?" 
                        		data-greaterdate-field="fromDate" 
                        		data-greaterdate-msg='ត្រូវថ្មីជាង ថ្ងៃអានចាប់ពី' />                        
			            			        
			        	អ្នកអាន
			          	<input data-role="dropdownlist"
			                   data-option-label="(--- ជ្រើសរើស ---)"
			                   data-value-primitive="true"
			                   data-text-field="name"
			                   data-value-field="id"
			                   data-bind="value: read_by, source: readerDS"
			                   required data-required-msg="ត្រូវការ អ្នកអាន" />            
			        </div>
			        
			        <br>

			        <div id="status"></div>            			        	
          			<button id="save" class="btn btn-primary"><i class="icon-hdd icon-white"></i> កត់ត្រា​</button>

				</div> <!-- //End div example-->            
			</div> <!-- //End div span12-->		
		</div> <!-- //End div row-fluid-->
	</div>
</script>
<script id="reading-row-template" type="text/x-kendo-tmpl">
	<tr>					
		<td>#=fullname#</td>	
		<td>#=electricity_box_number#</td>
		<td>#=number#</td>
		<td>#=multiplier#</td>
		<td align="center">
			<input type="checkbox" data-bind="checked: new_round, events:{ change: onChange }" />
		</td>		
		<td>
			<input data-role="numerictextbox"
				   data-min="0"
				   data-format="n0"                                      
                   data-bind="value: previous, events:{ change: onChange }"
                   style="width: 100px" #=previous>0?disabled='disabled':''# />
		</td>
		<td>
			<input class="txt#=index#" data-role="numerictextbox"
				   data-min="0"
				   data-format="n0"                                      
                   data-bind="value: current, events:{ change: onChange }"                   
                   style="width: 100px" />            
			<span class="label label-important" data-bind="invisible: isValid"><strong>កំហុស!</strong></span>			
		</td>		
		<td class="right" data-bind="text: usage"></td>	
    </tr>
</script>
<script id="reading-footer-template" type="text/x-kendo-template">
    <tr>    	
        <td class="right" colspan="8" style="font-size:30px;">
            សរុប: #:total()# kWh
        </td>
    </tr>
</script>

<script id="uInvoice" type="text/x-kendo-template">	
	<div class="container-fluid">
		<div class="row-fluid">
			<div class="span12">
				<div id="example" class="k-content">
					<span class="pull-right glyphicons no-js remove_2" 
						onclick="javascript:window.history.back()"><i></i></span>

					<h3>រៀបចំវិក្កយបត្រ</h3>

					<br>
					
					<div class="hidden-print">
						<input data-role="datepicker" 
		            			data-bind="value: monthOfSearch" 
		            			data-start="year" data-depth="year" 
		            			data-format="MM-yyyy" placeHolder="ប្រចាំខែ" />						
										
						<input id="company" data-bind="value: company_id, events:{ change: companyChanges" />
		            	<input id="location" disabled="disabled" data-bind="value: location_id" />
		            	|
		            	<input id="meters" data-bind="value: meter_id" />		            	

		            	<button type="button" class="btn btn-default" data-bind="click: search"><i class="icon-search"></i></button>								
					</div>											

					<br>
					
					<table class="table table-bordered table-striped table-white">
				        <thead>
				            <tr>
				                <th><input type="checkbox" data-bind="checked: chkAll, events: {change : checkAll}" /></th>				                				                
				                <th>អតិថិជន</th>	                    
				                <th>ប្រអប់</th>
				                <th>កុងទ័រ</th>
				                <th>មេគុណ</th>				                
				                <th>លេខចាស់</th>
				                <th>លេខថ្មី</th>
				                <th>សរុប</th>	                    
				            </tr>
				        </thead>
				        <tbody data-role="listview" 
				        		data-template="uInvoice-row-template" 
				        		data-auto-bind="false" 
				        		data-bind="source: readingDS"></tbody>
				        <tfoot data-template="uInvoice-footer-template" 
					        		data-bind="source: this"></tfoot>	            
				    </table>
				    <div id="pager" class="k-pager-wrap"></div>

				    <br>
				    
				    <div>
						ប្រចាំខែ
						<input id="monthOf" name="monthOf" data-role="datepicker" 
		            			data-bind="value: month_of"	data-start="year" 
		            			data-depth="year" data-format="MM-yyyy"
		            			required data-required-msg="ត្រូវការ ប្រចាំខែ" />
				        ថ្ងៃចេញវិក្កយបត្រ
				        <input id="issuedDate" name="issuedDate" data-role="datepicker" 
		            			data-bind="value: issued_date" data-format="dd-MM-yyyy"
		            			required data-required-msg="ត្រូវការ ថ្ងៃចេញវិក្កយបត្រ" />
				        ថ្ងៃចាប់ផ្ដើមទទួលប្រាក់
				        <input id="paymentDate" name="paymentDate" data-role="datepicker" 
		            			data-bind="value: payment_date" data-format="dd-MM-yyyy"
		            			required data-required-msg="ត្រូវការ ថ្ងៃបង់ប្រាក់" />
				        ថ្ងៃផុតកំណត់
				        <input id="dueDate" name="dueDate" data-role="datepicker" 
		            			data-bind="value: due_date" data-format="dd-MM-yyyy"
		            			required data-required-msg="ត្រូវការ ថ្ងៃផុតកំណត់" />			           	          	
				    </div>
				         
				    <br />
				    
				    <div>
				      	<div id="status"></div>				      	
				      	<button id="save" class="btn btn-primary"><i class="icon-list-alt icon-white"></i> រៀបចំវិក្កយបត្រ</button>     
				    </div>			   
				</div><!-- //End div example-->
			</div><!-- //End div span12-->
		</div><!-- //End div row-fluid-->
	</div>	
</script>
<script id="uInvoice-row-template" type="text/x-kendo-tmpl">
	<tr>
		<td align="center">
		   <input type="checkbox" data-bind="checked: isCheck" />
		</td>						
		<td>#=customers.fullname#</td>		
		<td>#=meters.electricity_box_number#</td>
		<td>#=meters.number#</td>
		<td>#=meters.multiplier#</td>						
		<td class="right">#=previous#</td>
		<td class="right">#=current#</td>		
		<td class="right">#=usage# kWh</td>		
    </tr>
</script>
<script id="uInvoice-footer-template" type="text/x-kendo-template">
    <tr>    	
        <td class="right" colspan="8" style="font-size:30px;">
            សរុប: #:total()# kWh
        </td>
    </tr>
</script>

<script id="uInvoicePrint" type="text/x-kendo-template">
	<div class="container-fluid">
		<div class="row-fluid">
			<div class="span12">
				<div id="example" class="k-content">
					<span class="pull-right glyphicons no-js remove_2" 
						onclick="javascript:window.history.back()"><i></i></span>

					<h3 class="hidden-print">បោះពុម្ពវិក្កយបត្រ</h3>
					<br>					

					<div class="hidden-print">								
						<input data-role="datepicker" 
		            			data-bind="value: monthOfSearch" 
		            			data-start="year" data-depth="year" 
		            			data-format="MM-yyyy" placeHolder="ប្រចាំខែ" />						
										
						<input id="company" data-bind="value: company_id, events:{ change: companyChanges" />
		            	<input id="location" disabled="disabled" data-bind="value: location_id" />
		            	|
		            	<input id="invoices" />
						
						<button type="button" class="btn btn-default" data-bind="click: search"><i class="icon-search"></i></button>
						<button type="button" class="btn btn-default" onclick="javascript:window.print()"><i class="icon-print"></i></button>				
						<input id="chkVisible" type="checkbox" data-bind="events: {click: print}" /> ប្រើក្រដាសពុម្ព
						<br>
						<div id="pager" class="k-pager-wrap"></div>																			
					</div>					
					
					<div data-role="listview" data-bind="source: dataSource" 
						data-template="uInvoice-print-row-template" data-auto-bind="false"></div>
		
				</div><!-- //End div example-->
			</div><!-- //End div span12-->
		</div><!-- //End div row-fluid-->
	</div>	
</script>
<script id="uInvoice-print-row-template" type="text/x-kendo-tmpl">	
  	<div class="print">
  		<table width="100%" style="margin-bottom: 8px;">
	    	<tr>
	    		<td align="center" >
	    			<img src="/banhji/#:companies.image_url#" height="90" width="60" style="float: left">
	    			<div>	    			
		    			<h4>#:companies.name#</h4>					
						#:companies.address# <br>
						#:companies.phone# /
						#:companies.mobile#
					</div>					
	    		</td>
	    	</tr>
	    </table>	        

	    <div class="hiddenPrint" style="border-bottom: 1px solid black;"></div>							
		
		<table width="100%" style="margin-bottom: 8px; font-size: xx-small;">
			<tr>
				<td valign="top" rowspan="6" width="50%" align="left">
					<span class="#=number#"></span>
					#:customers.number# #:customers.fullname# <br>
					#:customers.address# <br>
					ថ្ងៃចាប់ផ្ដើមទទួលប្រាក់: #=kendo.toString(new Date(payment_date), "dd-MM-yyyy")#
				</td>
				<td class="hiddenPrint" width="50%">លេខវិក្កយបត្រ INVOICE NO</td>
				<td>#:number#</td>							
			</tr>
			<tr>
				<td class="hiddenPrint">វិក្កយបត្រ INVOICE DATE</td>
				<td>#:kendo.toString(new Date(issued_date), "dd-MM-yyyy")#</td>											
			</tr>
			<tr>
				<td class="hiddenPrint">តំបន់ AREA</td>
				<td>#:location_name#</td>							
			</tr>
			<tr>
				<td class="hiddenPrint">លេខប្រអប់ BOX NO</td>
				<td>#:electricity_box_number#</td>				
			</tr>
			<tr>
				<td class="hiddenPrint">គិតចាប់ពីថ្ងៃទី FROM</td>
				<td>#:kendo.toString(new Date(from_date), "dd-MM-yyyy")#</td>							
			</tr>
			<tr>
				<td class="hiddenPrint">ដល់ថ្ងៃទី TO</td>
				<td>#:kendo.toString(new Date(to_date), "dd-MM-yyyy")#</td>
			</tr>
		</table>		
		
		<table width="100%" style="height: 260px;font-size: xx-small;">
			<thead class="hiddenPrint" style="border:1px solid black">
				<tr>
					<th align="center" width="10%">លេខកុងទ័រ <br> METER</th>
					<th align="center" width="15%">អំនានចាស់ <br> PREVIOUS</th>
					<th align="center" width="15%">អំនានថ្មី <br> CURRENT</th>
					<th align="center" width="10%">មេគុណ <br> <span style="font-size:5pt">MULTIPLICATION</span></th>
					<th align="center" width="15%">ប្រើប្រាស់ <br> <span style="font-size:5pt">CONSUMPTION</span></th>
					<th align="center" width="15%">តំលៃឯកត្តា <br> RATE</th>
					<th align="center" width="20%">តំលៃសរុប <br> AMOUNT</th>	
				</tr>
			</thead>			
			<tbody>
				<tr>					
					<td colspan="6" align="right" valign="top">
						ប្រាក់ជំពាក់ខែមុន						
						<br>
						ប្រាក់សងខែមុន						
						<br>
						ប្រាក់នៅជំពាក់						
					</td>
					<td align="right" valign="top">#:kendo.toString(kendo.parseFloat(balance_forward)/kendo.parseFloat(rate), 'c', locale)#</td>
				</tr>												
				#for(var i=0; i<invoiceLineList.length; i++) {#
					<tr>
						<td width="10%">
							#:invoiceLineList[i].meters.number#												
						</td>
						<td align="right">#:invoiceLineList[i].meters.previous#</td>
						<td align="right">#:invoiceLineList[i].meters.current#</td>
						<td align="center">#:invoiceLineList[i].meters.multiplier#</td>
						<td align="right">#:kendo.toString(kendo.parseInt(invoiceLineList[i].unit), 'n0')#</td>
						<td align="right">#:kendo.toString(kendo.parseFloat(invoiceLineList[i].price)/kendo.parseFloat(rate), 'c', locale)#</td>
						<td align="right">#:kendo.toString(kendo.parseFloat(invoiceLineList[i].amount)/kendo.parseFloat(rate), 'c', locale)#</td>
					</tr>
				#}#											
			</tbody>
			<tfoot>
				<tr>
					<td colspan="7">
						<p>#:memo#</p>
					</td>
				</tr>				
			</tfoot>			
		</table>				

        <table class="hiddenPrint" width="100%" border="1" cellpadding="2" cellspacing="2" style="font-size: xx-small;">
        	<tr>
        		<td rowspan="6" width="50%">
        			#=companies.term_of_condition#
        		</td>
        		<td width="30%">
        			<div style="float:left;text-align:left;">បំណុលខែនេះ</div>
  					<div style="float:right;text-align:right; font-size: 6pt;">TOTAL BALANCE</div>
        		</td>
        		<td width="20%" align="right" style="visibility:visible;">#:kendo.toString(kendo.parseFloat(total)/kendo.parseFloat(rate), 'c', locale)#</td>
        	</tr>
        	<tr>
        		<td>
        			<div style="float:left;text-align:left;">ទឹកប្រាក់ត្រូវបង់</div>
  					<div style="float:right;text-align:right;">TOTAL DUE</div>
        		</td>
        		<td align="right" style="visibility:visible;">#:kendo.toString(kendo.parseFloat(total)/kendo.parseFloat(rate), 'c', locale)#</td>        		
        	</tr>
        	<tr>
        		<td>
        			<div style="float:left;text-align:left;">ថ្ងៃផុតកំណត់</div>
  					<div style="float:right;text-align:right;">DUE DATE</div>
        		</td>
        		<td align="right" style="visibility:visible;">#:kendo.toString(new Date(due_date), 'dd-MM-yyyy')#</td>        		
        	</tr>
        	<tr>
        		<td>
        			<div style="float:left;text-align:left;">ថ្ងៃបង់ប្រាក់</div>
  					<div style="float:right;text-align:right;">PAY DATE</div>
        		</td>
        		<td></td>        		
        	</tr>
        	<tr>
        		<td>
        			<div style="float:left;text-align:left;">ប្រាក់បានបង់</div>
  					<div style="float:right;text-align:right;">PAY AMOUNT</div>
        		</td>
        		<td></td>        		
        	</tr>        	    	
        </table>			

		<div class="hiddenPrint" style="border: 1px dashed black; margin: 6px 6px;"></div>

		<table class="hiddenPrint" width="100%" border="1" cellpadding="2" cellspacing="2" style="font-size: xx-small;">
			<tr>
				<td colspan="2" rowspan="4" width="50%" style="visibility:visible;">
					<span class="#=number#"></span> <br>
					អតិថិជន: #=customers.number# #=customers.fullname# <br>
					ទីតាំងចរន្ត: #=location_name#, ប្រអប់: #=electricity_box_number#
				</td>										
				<td width="30%">
					<div style="float:left;text-align:left;">ទឹកប្រាក់ត្រូវបង់</div>
  					<div style="float:right;text-align:right;">TOTAL DUE</div>
				</td>
				<td align="right" width="20%" style="visibility:visible;">#:kendo.toString(kendo.parseFloat(total)/kendo.parseFloat(rate), 'c', locale)#</td>
			</tr>
			<tr>							    
				<td>
					<div style="float:left;text-align:left;">ថ្ងៃផុតកំណត់</div>
  					<div style="float:right;text-align:right;">DUE DATE</div>
				</td>
				<td align="right" style="visibility:visible;">#:kendo.toString(new Date(due_date), 'dd-MM-yyyy')#</td>
			</tr>
			<tr>							    
				<td>
					<div style="float:left;text-align:left;">ថ្ងៃបង់ប្រាក់</div>
  					<div style="float:right;text-align:right;">PAY DATE</div>
				</td>
				<td></td>
			</tr>
			<tr>				
				<td>
					<div style="float:left;text-align:left;">អ្នកទទួលប្រាក់</div>
  					<div style="float:right;text-align:right;">CASHIER</div>
				</td>
				<td></td>
			</tr>
		</table>
	</div>
</script>
<script id="printDefaultTemplate" type="text/x-kendo-template">
	<div id="expdf" class="k-button">PDF</div>	
</script>

<script id="cashier" type="text/x-kendo-template">
	<div class="container-fluid">
		<div class="row-fluid">				
			<div class="span12">
				<div id="example" class="k-content">
					<span class="pull-right glyphicons no-js remove_2" 
						onclick="javascript:window.history.back()"><i></i></span>

					<h3>បេឡាករ</h3>

					<div class="row-fluid">
						<div class="span3">
							<br>

							<input id="customers" data-bind="value: customer_id" style="width: 100%"  />

							<br><br>							
					      					
							<h5><i class="icon-info-sign"></i> ពត៌មានសង្ខេបអតិថិជន</h5>				
							<table width="100%" style="background-color:Silver; color:black;">
								<tr>
									<td colspan="2">
										<i class="icon-user icon-li icon-fixed-width"></i> 
										<span data-bind="text: customer.fullIdName"></span>										
									</td>																			
								</tr>
								<tr>
									<td colspan="2">								
										សមតុល្យ: <span data-bind="text: customer.balance"></span>
										<span data-bind="text: customer.currencies[0].code">
									</td>
								</tr>
								<tr>
									<td colspan="2">
										ប្រាក់កក់: <span data-bind="text: customer.deposits[0].amount"></span>
										<span data-bind="text: customer.currencies[0].code">
									</td>							
								</tr>
								<tr>
									<td>
										<i class="icon-money icon-li icon-fixed-width"></i> <span data-bind="text: customer.currencies[0].code"></span>
									</td>
									<td>
										<i class="icon-phone icon-li icon-fixed-width"></i> <span data-bind="text: customer.phones[0].phone"></span>
									</td>
								</tr>											
								<tr>
									<td colspan="2">
										<i class="icon-home icon-li icon-fixed-width"></i> <span data-bind="text: customer.addresses[0].address"></span>
									</td>						
								</tr>
							</table>

							<br>			
							
							<h5><i class="icon-list"></i> ប្រតិបត្តិការ</h5>
							
							<div data-role="grid" data-bind="source: transactionDS"
					            data-row-template="cashier-transaction-row-template" data-auto-bind="false"                  
					            data-columns='[{ title: "ថ្ងៃ-ខែ-ឆ្នាំ", width: 70 }, 
					                { title: "ប្រភេទ", width: 85 },	                     
					                { title: "ទឹកប្រាក់" }	                    
					                ]'>
							</div>
						
						</div> <!-- //End span3 -->

						<div id="exampleValidate" class="span9">
							<div class="row-fluid">
								<div class="span4">
									<div class="innerAll padding-bottom-none-phone">
										<a href="javascript:void(0)" class="widget-stats widget-stats-gray widget-stats-4"> 
											<span class="txt">អតិថិជន</span>
											<span class="count" data-bind="text: total_customer"></span>
											<span class="glyphicons user"><i></i></span>
											<div class="clearfix"></div>
											<i class="icon-play-circle"></i> 
										</a>
									</div>
								</div>

								<div class="span4">
									<div class="innerAll padding-bottom-none-phone">
										<a href="#/payment_detail" class="widget-stats widget-stats-primary widget-stats-4">
											<span class="txt">បង់ប្រាក់ប្រចាំថ្ងៃ</span>
											<span class="count"><span data-bind="text: total_payment" style="font-size: 35px;"></span></span>
											<span class="glyphicons coins"><i></i></span>
											<div class="clearfix"></div>
											<i class="icon-play-circle"></i>
										</a>
									</div>
								</div>

								<div class="span4">
									<div class="innerAll padding-bottom-none-phone">
										<a href="#/reconcile" class="widget-stats widget-stats-inverse widget-stats-5">
											<span class="glyphicons refresh"><i></i></span>
											<span class="txt">ផ្ទៀងផ្ទាត់ &<br><br> ផ្ទេរសាច់ប្រាក់</span>
											<div class="clearfix"></div>
										</a>
									</div>
								</div>				

							</div> <!-- //End row-fluid -->
														
							<br>

							<table class="table table-bordered table-striped table-white">
						        <thead>
						            <tr>
						                <th></th>
						                <th>ល.រ</th>						                
						                <th>កាលបរិច្ឆេទ</th>
						                <th>ឈ្មោះ</th>
						                <th>វិក្កយបត្រ</th>
						                <th class="right">ទឹកប្រាក់</th>
						                <th class="right">ទទួលប្រាក់</th>							                
						            </tr>
						        </thead>
						        <tbody data-role="listview"
						        		data-auto-bind="false"					        		 
						        		data-template="cashier-row-template" 
						        		data-bind="source: invoiceList"></tbody>
						        <tfoot data-template="cashier-footer-template" 
						        		data-bind="source: this"></tfoot>						        
						    </table>						    

							<br>

							<div id="status"></div>

							<div class="row-fluid">
								<div class="span4">						
									<table>
										<tr>
											<td>ថ្ងៃទទួលប្រាក់</td>
						              		<td>
						              			<input id="paymentDate" name="paymentDate" data-role="datepicker" 
							              			data-bind="value: payment_date" data-format="dd-MM-yyyy"
							              			required data-required-msg="ត្រូវការ ថ្ងៃទទួលប្រាក់" />
											</td>
										</tr>										
										<tr>
						                    <td>វីធីបង់ប្រាក់</td>
						                  	<td>
						                  		<input id="paymentMethod" data-bind="value: payment_method_id" required data-required-msg="ត្រូវការ វីធីបង់ប្រាក់" />						                  		
						                  	</td>
						                <tr>
										<tr>
							                <td>លេខកូដសែក</td>
							                <td><input id="check_no" class="k-textbox" data-bind="value: check_no" /></td>
							            <tr>
							            <tr>
											<td>គណនីសាច់ប្រាក់</td>
											<td>
												<input id="cashAccount" data-bind="value: cash_account_id" required data-required-msg="ត្រូវការ គណនីសាច់ប្រាក់" />												
											</td>
										</tr>										
									</table>							
								</div>																
								<div class="span4">
									<table>	
										<tr>
											<td>ទទួលប្រាក់សរុប:</td>
											<td align="right"><span data-bind="text: pay_amount"></span></td>
										</tr>									
										<tr>
											<td>បញ្ចុះតំលៃ:</td>
											<td>
												<input data-role="numerictextbox" 
														data-format="c0" data-culture="km-KH" 
														data-bind="value: discount, events: {change : change}" />
											</td>
										</tr>
										<tr>
											<td>ទឹកប្រាក់ពិន័យ:</td>							
											<td>
												<input data-role="numerictextbox" 
														data-format="c0" data-culture="km-KH" 
														data-bind="value: fine, events: {change : change}" />
											</td>
										</tr>										
										<tr>
											<td>នៅសល់:</td>
											<td align="right"><span data-bind="text: remain"></span></td>
										</tr>
									</table>		          	
								</div>							
								<div class="span4">
									<div class="innerAll padding-bottom-none-phone">
										<a id="save" name="save" class="widget-stats widget-stats-info widget-stats-4">
											<span class="txt">ទឹកប្រាក់ទទួលបាន</span>
											<span class="count" style="font-size: 35px;" data-bind="text: receive_amount"></span>
											<span class="glyphicons cart_in"><i></i></span>
											<div class="clearfix"></div>
											<i class="icon-play-circle"></i>
										</a>
									</div>								
								</div>
							</div>

						</div> <!-- //End span9 -->
					</div>
				</div> <!-- //End example -->
			</div>
		</div>
	</div>
</script>
<script id="cashier-transaction-row-template" type="text/x-kendo-tmpl">
    <tr>        
        <td>#:kendo.toString(new Date(issued_date), "dd-MM-yy")#</td>
        <td>#:type# </td>
        <td align="right">#:kendo.toString(kendo.parseFloat(amount), "c", locale)#</td>        
   	</tr>
</script>
<script id="cashier-row-template" type="text/x-kendo-tmpl">		
	<tr id="rowGrid-#:id#">
		<td>
			<input type="checkbox" data-bind="checked: isPay, events:{change: checkPay}">			
		</td>
		<td class="sno">1</td>			
		<td>#:kendo.toString(new Date(issued_date), "dd-MM-yyyy")#</td>		
		<td>#=fullname#</td>
		<td>#:number#</td>				
		<td class="right">#:kendo.toString(amount, "c", locale)#</td>
		<td class="right">
			<input data-role="numerictextbox" 
					data-format="c" data-culture=#:locale#
					data-bind="value: pay_amount, events: {change : change}" 
					style="width: 120px;">
			<i class="icon-trash" data-bind="events: { click: remove "></i>						
		</td>				
    </tr>   
</script>
<script id="cashier-footer-template" type="text/x-kendo-template">
    <tr>    	
        <td class="right" colspan="7" style="font-size:30px;">
            ប្រាក់ត្រូវបង់សរុប: #:total()#
        </td>
    </tr>
</script>

<script id="customerList" type="text/x-kendo-template">
	<div id="slide-form">
		<div class="container-fluid">
			<div class="row-fluid">
				<div class="span12">
					<div id="example" class="k-content">
						<div class="hidden-print">
							<span class="pull-right glyphicons no-js remove_2" 
								onclick="javascript:window.history.back()"><i></i></span>

							<input id="company" />
							
							<button type="button" class="btn btn-default" onclick="javascript:window.print()"><i class="icon-print"></i></button>						
						</div>

						<h3 align="center">បញ្ជីអតិថិជន</h3>	

						<div id="grid"></div>

						<br>
					    					
					</div> <!-- //End div example--> 
				</div><!-- //End div span12-->
			</div><!-- //End div row-fluid-->
		</div>
	</div>	
</script>

<script id="paymentSummary" type="text/x-kendo-template">
	<div id="slide-form">
		<div class="container-fluid">
			<div class="row-fluid">
				<div class="span12">
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
							<h4>របាយការណ៍លក់​ និង ទទួលប្រាក់សង្ខេប</h4>
							
							<span id="lblStartDate"></span>																	
							<span id="lblEndDate"></span>									
						</div>

						<br>						

						<div id="grid"></div>						

					</div><!-- //End div example-->
				</div><!-- //End div span12-->
			</div><!-- //End div row-fluid-->
		</div>
	</div>	
</script>
<script id="paymentDetail" type="text/x-kendo-template">
	<div id="slide-form">
		<div class="container-fluid">
			<div class="row-fluid">
				<div class="span12">
					<div id="example" class="k-content">

						<div class="hidden-print">
							<span class="pull-right glyphicons no-js remove_2" 
								onclick="javascript:window.history.back()"><i></i></span>

							<input id="dateSorter" />
							<input id="startDate" placeHolder="ថ្ងៃទី" />
							<input id="endDate" placeHolder="ដល់" />	
							<input id="cashiers" />									            				            			

							<button id="search" type="button" class="btn btn-default"><i class="icon-search"></i></button>
							<button type="button" class="btn btn-default" onclick="javascript:window.print()"><i class="icon-print"></i></button>							
						</div>

						<br>

						<div align="center">
							<h4>របាយការណ៍ទទួលប្រាក់លំអិត</h4>
							
							<span id="lblStartDate"></span>																	
							<span id="lblEndDate"></span>
							<br>
							<span id="lblCashier"></span>																
						</div>

						<br>            			

						<div id="grid"></div>
						
						<br>

						<table align="right" style="font-size:30px;" cellspacing="10", cellpadding="10">
							<tr align="right">
								<td>ប្រាក់កក់សរុប:</td>
								<td><span id="deposit"></span></td>
							</tr>
							<tr align="right">
								<td>សរុប:</td>
								<td><span id="total"></span></td>
							</tr>
						</table>
						
					</div><!-- //End div example-->
				</div><!-- //End div span12-->
			</div><!-- //End div row-fluid-->
		</div>
	</div>	
</script>
<script id="payment-type-template" type="text/x-kendo-template">
    #if(type=="deposit"){#
    	ប្រាក់កក់
    #}else if(type=="invoice"){#
    	វិក្កយបត្រ
    #}else{#

    #}#
</script>
<!-- END OF DAWINE -->

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
	<div class="container-960">
	    <div class="page-wrap">
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

	        <table id="myTable" class="table-condensed" width="100%">
	        	<thead>
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
		            <tr class="hiddenPrintFrame" style="font-size: xx-small;">
		                <td>ឈ្នួលបន្ទប់</td>
		                <td></td>
		                <td align="right">1</td>
		                <td></td>
		                <td align="right">#=kendo.toString(rental, 'c0')#</td>
		                <td align="right">#=kendo.toString(rental, 'c0')#</td>
		            </tr>
		            <tr class="hiddenPrintFrame" style="font-size: xx-small;">
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
		            <tr style="font-size: xx-small;">
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
		            <tr style="font-size: xx-small;">
		                <td><span style="font-size:xx-small;">សេវាបង់ប្រាក់</span></td>
		                <td></td>
		                <td></td>
		                <td></td>
		                <td></td>
		                <td align="right">
		                    #=kendo.toString(service, 'c')#
		                </td>
		            </tr>
		            #}#           
		            #if(deposit>0){#
		            <tr class="hiddenPrintFrame">
		                <td>ប្រាក់កក់</td>
		                <td></td>
		                <td></td>
		                <td></td>
		                <td></td>
		                <td align="right">
		                    (#=kendo.toString(deposit, 'c0')#)
		                </td>
		            </tr>
		            #}# 
	            </tbody>          
	        </table>     

	        <div class="hiddenPrintFrame" align="right">សរុបៈ #=kendo.toString(total, 'c3')#</div>
	    </div>    

	    <footer class="site-footer" data-bind="invisible: framePrint">
	        <div class="hiddenprintframe">
	            <p class="hiddenPrint" align="left">
	                *ចំណាំ៖ <br />
	                - បើមិនចង់ស្នាក់នៅបន្តត្រូវទូទាត់ប្រាក់ឪ្យគ្រប់សំរាប់ខែចាស់ <br />
	                - បើសិនជាស្នាក់នៅបន្តលើស​ 1​ ថ្ងៃនឹងត្រូវគិតតម្លៃ 1 ខែ <br />
	                - បើឈប់ស្នាក់នៅត្រូវឪ្យដំណឹងមុន 1អាទិត្យនៃថ្ងៃចូលស្នាក់
	            </p>
	        </div>
	    </footer>
	</div>
</script>
<style scoped>
    * {
        margin: 0;
    }

    html, body {    	
        height: 100%;
    }

    #myTable {        
        font-size: small;       
    }

    table {
        border-collapse: collapse;              
    }

    table th {
        border: 1px solid black;
    }

    .page-wrap {    	
        min-height: 360px;       
        page-break-before: always;
    }

    .site-footer {
        font-size: x-small;                
        bottom: 0px;
    }
</style>
<!-- Dawine Section -->
<!--  template section ends  -->
<script src="<?php echo base_url(); ?>resources/js/libs/localforage.min.js"></script>
<script>
	var banhji = banhji || {};
	var baseUrl = "<?php echo base_url(); ?>"+'api/';
	banhji.token = null;
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
		baseUrl 	: "<?php echo base_url(); ?>api/auth",
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
			var that = this;
			if(this.get('passed')) {
				this.dataStore.add({email: this.get('email'), password: this.get('password')});
				this.dataStore.sync();
				this.dataStore.bind('requestEnd', function(e){
					that.set('email', null);
					that.set('password', null);
					banhji.router.navigate("/");
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
				banhji.router.navigate('/login');
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
	banhji.payment_option = kendo.observable({
		data : [
			{type: "cash", description: "សាច់ប្រាក់សុទ្ធ", selected: false},
			{type: "bank", description: "តាមធនាគារ", selected: false},
			{type: "check", description: "ចេញជាសែក", selected: false}
		],
	});
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
	banhji.currency = kendo.observable({
		dataSource: dataStore(baseUrl + 'currencies'),
		getEnabled: function() {
			this.dataSource.filter({field: "enabled", operator: '', value: 'true'});
		}
	});
	banhji.bank = kendo.observable({
		ds 			: dataStore(baseUrl + "banks"),
		find 		: function(arg) {
			var c = typeof arg;
			if(c === 'object') {
				this.ds.filter(arg);
			} else if(c === 'string') {
				this.ds.filter(
					{field: 'name', operator: 'like', value: arg}
				);
			} else if(c === 'number') {
				this.ds.filter(
					{field: 'id', operator: '', value: arg}
				);
			} else {
				console.log('no field provided for search!');
			}
		},
		getAll 		: function() {
			this.ds.filter(
				{field: 'deleted', operator: '', value: 'false'}
			);
		},
		getAllDelete: function() {
			this.ds.query([
				{field: 'deleted', operator: '', value: 'false'},
				{field: 'deleted', operator: 'or', value: 'true'}
			]);
		},
		setCurrent 	: function(current) {
			this.set('current', current);
		},
		add 		: function(data) {
			this.ds.add(data);
		},
		insert 		: function(index, data) {
			this.ds.insert(index, data);
		},
		remove 		: function(data) {
			this.ds.remove(data);
		},
		save 		: function() {
			var that = this,
				dfd  = $.Deferred();
			this.ds.sync();
			this.ds.bind('requestEnd', function(e) {
				var type = e.type;
				if(type === 'create') {
					dfd.resolve(e.response.results);
				} else if(type==="update") {
					dfd.resolve(e.response.results);
				} else if(type== 'destroy') {
					dfd.resolve(e.response.results);
				} else {
					dfd.reject({error:'not know issue'});
				}
			});
			return dfd.promise();
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
	banhji.entity = kendo.observable({
		dataStore 	: '',
		setCurrent 	: function(current) {
			this.set('current', current);
		},
		save 		: function() {
			this.dataStore.sync();
		}
	});
	banhji.segmentItem = kendo.observable({
		ds 			: new kendo.data.DataSource({
			transport: {
				read 	: {
					url: baseUrl + 'segments/items',
					type: "GET",
					headers: {
						"Entity": getDB(),
						"User": auth.getLogin() === null ? '':auth.getLogin().id
					},
					dataType: 'json'
				},
				create 	: {
					url: baseUrl + 'segments/items',
					type: "POST",
					headers: {
						"Entity": getDB(),
						"User": auth.getLogin() === null ? '':auth.getLogin().id
					},
					dataType: 'json'
				},
				update 	: {
					url: baseUrl + 'segments/items',
					type: "PUT",
					headers: {
						"Entity": getDB(),
						"User": auth.getLogin() === null ? '':auth.getLogin().id
					},
					dataType: 'json'
				},
				destroy : {
					url: baseUrl + 'segments/items',
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
			group: { field: "segment.name"},
			batch: true,
			serverFiltering: true,
			serverPaging: true,
			pageSize: 100
		}),
		bySegment 	: function(segment) {
			var type = typeof segment;

			return this.ds.query({
				filter: {field: 'segment_id', value: segment},
				page: this.ds.page(),
				take: this.ds.pageSize()
			});
		}
	});
	banhji.segment = kendo.observable({
		dataStore: new kendo.data.DataSource({
			transport: {
				read 	: {
					url: baseUrl + "segments",
					type: "GET",
					headers: {
						"Entity": getDB()
					},
					dataType: 'json'
				},
				create 	: {
					url: baseUrl + "segments",
					type: "POST",
					headers: {
						"Entity": getDB()
					},
					dataType: 'json'
				},
				update 	: {
					url: baseUrl + "segments",
					type: "PUT",
					headers: {
						"Entity": getDB()
					},
					dataType: 'json'
				},
				destroy : {
					url: baseUrl + "segments",
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
		close 		: function() {
			window.history.back(-1);
		},
		addItems : function() {},
		addNew 	 : function() {},
		find 	 : function() {
			//find segment and its items
		},
		save 	 : function() {}
	});
	banhji.structure = kendo.observable({
		close 		: function() {
			window.history.back(-1);
			if(this.dataStore.hasChanges()) {
				this.dataStore.cancelChanges();
			}
		},
		dataStore 	: new kendo.data.DataSource({
			transport: {
				read 	: {
					url: baseUrl + "structures",
					type: "GET",
					headers: {
						"Entity": getDB()
					},
					dataType: 'json'
				},
				create 	: {
					url: baseUrl + "structures",
					type: "POST",
					headers: {
						"Entity": getDB()
					},
					dataType: 'json'
				},
				update 	: {
					url: baseUrl + "structures",
					type: "PUT",
					headers: {
						"Entity": getDB()
					},
					dataType: 'json'
				},
				destroy : {
					url: baseUrl + "structures",
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
		segments 	: banhji.segment,
		segSelected : function(e) {
			if($(e.target).text() === "រើសមួយ") {
				$(e.target).text('រើសរួច');
				banhji.structure.get('current').segments.push({id: e.data.id, code_length: e.data.code_length, name: e.data.name});
			} else {
				$(e.target).text('រើសមួយ');
				$.each(this.get('current').segments, function(i, v){
					if(v.id === e.data.id) {
						banhji.structure.get('current').segments.splice(i, 1);
						return false;
					}
				});
			}
			
			console.log(this.get('current').segments.length);
			
		},
		setCurrent	: function(current) {
			this.set('current', current);
		},
		find 	 	: function(arg) {
			this.dataStore.query({
				filter: arg
			}).then(function(e){
				banhji.structure.setCurrent(banhji.structure.dataStore.data()[0]);
			});
		},
		save 		: function() {
			this.dataStore.sync();
			this.dataStore.bind('requestEnd', function(e){
				if(e.type !== 'read') {
					console.log('operation type ' + e.type + ' done successfully.');
					console.log(e.response);
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

	/*********************
	* Accounting Section *
	**********************/
	banhji.account = kendo.observable({
		dataStore 	: dataStore(baseUrl + "accounts"),
		types 		: dataStore(baseUrl + 'accounts/types'),
		setCurrent 	: function(current) {
			this.set('current', current);
		},
		addNew 		: function() {
			this.dataStore.insert(0,{
				code: 45897,
				parentAccount: {id: 10, name: "lkdsfdklsk"},
				type: {id: 10},
				name: null,
				name_en: null,
				description: null
			});
			this.setCurrent(this.dataStore.at(0));
		},
		selectModal : function() {
			$('body').append("<div id='vendorModal'><div id='vendorModalInner'></div></div>");
			var modal = $("#vendorModal").kendoWindow({
				title: "បញ្ជីអ្នកផ្គត់ផ្គង់",
				modal: true,
				width: 300,
				height: 400,
				// visible: false,
				open: function(e) {
					var grid = $("#vendorModalInner").kendoGrid({
						dataSource: banhji.account.dataStore,
						columns: [{field: 'name', title: 'គណនី'}],
						selectable: true,
						scrollable: true,
						height: "380px"
					}).data("kendoGrid");
					grid.bind('change', function(e){
						var selected = this.select();
						var model = this.dataItem(selected);
						banhji.account.get('current').set('parentAccount', {id: model.id, name: model.name});
					});
				}
			}).data('kendoWindow');
			modal.center();
			modal.bind('close', function(e){
				modal.destroy();
			});g
		},
		remove 		: function(e) {
			this.dataStore.remove(e.data);
		},
		findBy 		: function(key) {
			this.dataStore.filter(key);
		},
		findById 	: function(id) {
			this.dataStore.query({
				filter: {field: 'id', operator: '', value: id},
				page: 1,
				pageSize: 1
			}).done(function(e){
				var data = banhji.account.dataStore.data();
				if(data.length > 0) {
					banhji.account.setCurrent(data[0]);
				}
			});
		},
		save 		: function() {
			this.dataStore.sync();
		}
	});

	banhji.journalEntry = kendo.observable({
		dataStore 	: dataStore(baseUrl + "entries"),
		contactDS 	: dataStore(baseUrl + "entries/contacts"),
		setCurrent 	: function(entryModel) {
			this.set("current", entryModel);
		},
		addContact 	: function(contact) {
			this.contactDS.add(contact);
		},
		addNew 		: function(entry) {
			this.dataStore.add(entry);
		},
		remove 		: function(entry) {
			this.dataStore.remove(entry);
		},
		delContact	: function(contact){
			this.contactDS.remove(contact);
		},
		getById 	: function(id) {
			var that = this;
			this.dataStore.query({
				filter 	: {field: 'id', value: id},
				take 	: 1
			}).then(function(e){
				that.set('current', that.dataStore.at(0));
			});
		},
		getAll 		: function(){
			this.dataStore.filter({
				field: 'deleted', value: false
			});
		},
		getDeleted 	: function() {
			this.dataStore.filter({
				field: 'deleted', value: true
			});
		},
		saveContact : function() {
			this.contactDS.sync();
		},
		save 		: function() {
			var that = this, dfd = $.Deferred();
			this.dataStore.sync();
			this.dataStore.bind('requestEnd', function(e){
				var res = e.response.results;
				if(res) {
					dfd.resolve(res);
				} else {
					dfd.reject({error: true, msg:"problem with api called."});
				}
			});
			return dfd.promise();
		}
	});

	banhji.journal = kendo.observable({
		dataStore 	: dataStore(baseUrl + "journals"),
		entries 	: banhji.journalEntry,
		contactStore: dataStore(baseUrl + "journals/contacts"),
		setCurrent 	: function(journal) {
			this.set('current', journal);
		},
		insert 		: function() {
			this.dataStore.insert(0,{
				reference: null,
				type: 'GL',
				memo: null
			});
			this.setCurrent(this.dataStore.data()[0]);
		},
		addEntry 	: function(entry) {
			this.entries.addNew(entry);
		},
		removeEntry : function(e) {
			this.entries.remove(e.data);
		},
		find 		: function(id) {
			this.dataStore.filter({field: 'id', value: id});
		},
		findAll 	: function() {
			this.dataStore.filter({field: 'deleted', value: 'false'});
		},
		findBy 		: function(arr) {
			this.dataStore.filter(arr);
		},
		getData 	: function() {
			return this.dataStore.data();
		},
		remove 		: function(model) {
			this.dataStore.remove(model);
			this.dataStore.sync();
			this.dataStore.bind('requestEnd', function(e){
				console.log(e.type);
			});
		},
		getAccount 	: function(id) {
			this.dataStore.query({
				filter: {field: 'id', value: id}
			}).then(function(e){
				banhji.acccount.set('current', banhji.dataStore.at(0));
			});
		},
		save 		: function() {
			var self = this, dfd = $.Deferred();
			this.dataStore.sync();
			this.dataStore.bind('requestEnd', function(e){
				var type = e.type;
				var results  = e.response.results;
				if(results) {
					dfd.resolve(results);
					if(type === 'create') {
						$.each(results, function(i, v){
							self.contactStore.add(
								{
									journal: v.id,
									contacts: [{ 
										id: auth.getLogin().id,
										action: 'creator'
									}]
								}
							);
						});						
						self.contactStore.sync();
					}
					if(type === 'update') {
						$.each(results, function(i, v){
							self.contactStore.add(
								{
									journal: v.id,
									contacts: [{ 
										id: auth.getLogin().id,
										action: 'updator'
									}]
								}
							);
						});		
						self.contactStore.sync();
					}
				} else {
					dfd.reject({error: true, msg:"problem with api call."});
				}
			});
			return dfd.promise();
		}
	});

	banhji.accounting = kendo.observable({
		accounts 	: banhji.account,
		types 		: dataStore(baseUrl + 'accounts/types'),
		entries 	: banhji.journalEntry,
		findAccount : function(keyword) {
		 	var keyType = typeof keyword;
		 	try {
			 	if(keyType === 'number') {
			 		this.accounts.dataStore.filter([
			 			{field: 'id', operator: '', value: keyword},
			 			{field: 'active', operator: '', value: 'true'}
			 		]);
			 	} else if(keyType === 'string') {
			 		this.accounts.dataStore.filter([
			 			{field: 'code', operator: '', value: keyword},
			 			{field: 'name', operator: 'or', value: keyword},
			 			{field: 'active', operator: '', value: 'true'}
			 		]);
			 	} else {
			 		throw "keyword must be either number or string";
			 	}
		 	} catch(err) {
		 		console.log(err);
		 	}
		},
		newAccount 	: function() {
			this.accounts.add();
		},
		createAcct 	: function() {
			// this.accounts.save();
			banhji.account.dataStore.sync();
		},
		selected 	: function(e) {
			var selected = e.data;
			console.log(e.data);
		},
		findTxByAcct: function(keyword) {
		 	var keyType = typeof keyword;
		 	if(keyType === 'number') {
		 		banhji.journalEntry.dataStore.query({
		 			filter: {
		 				logic: 'account',
		 				filters: [{field: 'id', operator: '', value: keyword}]
		 			},
		 			page: 1,
		 			pageSize: 20
		 		});
		 	} else if(keyType === 'string') {
		 		// banhji.journalEntry.dataStore.filter([
		 		// 	{field: 'code', operator: '', value: keyword},
		 		// 	{field: 'name', operator: 'or', value: keyword},
		 		// 	{field: 'active', operator: '', value: 'true'}
		 		// ]);
		 	} else {
		 		throw "keyword must be either number or string";
		 	}
		}
	});

	banhji.gl 	= kendo.observable({
		entry 		: banhji.journalEntry,
		segments  	: banhji.segmentItem.ds,
		entries 	: [],
		classDS		: [],
		accountList : [],
		debit 		: 0.00,
		credit 		: 0.00,
		init 		: function() {
			// this.accountList.splice(0,this.accountList.length);
			if(banhji.account.dataStore.data().length > 0) {
				banhji.gl.set('accountList', banhji.account.dataStore.data());
			} else {
				banhji.account.dataStore.query({
					filter: {field: 'active', operator: '', value: true},
					page: 1,
					pageSize: 500
				}).then(function(e){
					banhji.gl.set('accountList', banhji.account.dataStore.data());
				});
			}
			if(this.segments.data().length > 0) {
				$.each(this.segments.data(), function(i, v){
					banhji.gl.classDS.push(v);
				});
			} else {
				this.segments.query({
					page 	: 1,
					pageSize: 500
				}).done(function(e){
					$.each(banhji.gl.segments.data(), function(i, v) {
						banhji.gl.classDS.push(v);
					});
				}).fail(function(e){
					console.log(e);
				});
			}
		},
		setCurrent 	: function(current) {
			this.set('current', current);
		},
		check 		: function(e) {
			if(e.data.debit > 0 && e.data.credit > 0) {
				alert("ឥណពន្ធ និង ឥណទាន មិនអាច មានតំលៃក្នុងជូរតែមួយទេ។");
			}
		},
		add 		: function() {
			this.entry.dataStore.insert(0,{
				reference: null,
				type: 'GL',
				voucher: 'djflks',
				memo: 'General Ledger',
				conatact: {id: auth.getLogin().id, name: auth.getLogin().username},
				entries: null
			});
			this.setCurrent(this.entry.dataStore.at(0));
		},
		addEntry 	: function() {
			this.entries.push({
				memo 	: null,
				debit 	: 0.00,
				credit 	: 0.00,
				account : null,
				rate 	: 1,
				locale 	: 'km-KH',
				segment : null,
				contact : banhji.vendors.get('current')
			});
		},
		totalDebit 	: function() {
			var amount = 0;
			$.each(this.entries, function(i, v){
				if(v.debit > 0.00) {
					amount += kendo.parseFloat(v.debit);
				}
			});
			this.set('debit', amount);
			
			return amount;
		},
		totalCredit : function() {
			var amount = 0;
			$.each(this.entries, function(i, v){
				if(v.credit > 0.00) {
					amount += kendo.parseFloat(v.credit);
				}
			});
			this.set('credit', amount);
			
			return amount;
		},
		removeEntry : function(e){
			$.each(this.entries, function(i, v){
				if(v === e.data) {
					banhji.gl.entries.splice(i, 1);
					return false;
				}
			});
		},
		save 		: function() {
			if(this.entries.length === 0 || this.entries.length ===1) {
				alert("សូមពិនិត្យឡើងវិញ។");
			} else if(this.debit !== this.credit){
				alert("សូមពិនិត្យឡើងវិញលើផ្នែកឥណពន្ធនិងឥណទាន។");
			}else {
				var entries = [];
				$.each(this.entries, function(i, v){
					if(v.debit > 0) {
						entries.push({
							memo 	: v.memo,
							account : v.account,
							amount 	: v.debit,
							rate 	: 1,
							is_debit: true,
							locale 	: 'km-KH',
							segment : v.segment,
							contact : v.contact
						});
					} else {
						entries.push({
							memo 	: v.memo,
							account : v.account,
							amount 	: v.credit,
							rate 	: 1,
							is_debit: false,
							locale 	: 'km-KH',
							segment : v.segment,
							contact : v.contact
						});
					}
						
				});
				this.get('current').set('entries', entries);
				this.entry.save();
			}
		}
	});
	
	banhji.cashiers = {};
	banhji.cashiers.page = kendo.observable({
		deposit 	: function() {
			banhji.router.navigate('/cashiers/u/deposit');
		},
		transfer 	: function() {
			banhji.router.navigate('/cashiers/u/transfer');
		},
		vendor  	: function() {
			banhji.router.navigate('/cashiers/u/vendor');
		},
		customer 	: function() {
			location.href = 'https://rith.local/banhji/app/?entity=db_banhji#/cashier';
			// banhji.router.navigate('/cashier');
		}
	});
	banhji.cashiers.deposit = kendo.observable({
		accounts 	: [],
		entry 		: banhji.journalEntry,
		segments  	: banhji.segmentItem.ds,
		entries 	: [],
		from 		: {
				memo 	: null,
				amount 	: 0.00,
				is_debit: true,
				account : null,
				rate 	: 1,
				locale 	: 'km-KH',
				segment : null,
				contact : null
		},
		init 		: function() {
			if(banhji.account.dataStore.data().length > 0) {
				for(var i=0; i > banhji.account.dataStore.data().length; i++) {
					if(banhji.account.dataStore.data()[i].type.id === 6) {
						banhji.cashiers.deposit.accounts.push(banhji.account.dataStore.data()[i]);
					}
				}
			} else {
				banhji.account.dataStore.query({
					filter: {field: 'active', operator: '', value: true},
					page: 1,
					pageSize: 500
				}).then(function(e){
					for(var i=0; i < banhji.account.dataStore.data().length; i++) {
						if(banhji.account.dataStore.data()[i].type.id === 6) {
							banhji.cashiers.deposit.accounts.push(banhji.account.dataStore.data()[i]);
						}
					}
				});
			}
		},
		close     : function() {
			window.history.back(-1);
			this.entry.dataStore.cancelChanges();
			this.set('entries', []);
		},
		setCurrent 	: function(current) {
			this.set('current', current);
		},
		addJournal 	: function() {
			this.entry.dataStore.insert(0,{
				reference: null,
				type: 'deposit',
				voucher: null,
				memo: null,
				contact: {id: auth.getLogin().id, name: auth.getLogin().username},
				entries: null
			});
			this.setCurrent(this.entry.dataStore.at(0));
		},
		addEntry 	: function() {
			this.entries.push({
				memo 	: null,
				amount 	: 0.00,
				is_debit: false,
				account : null,
				rate 	: 1,
				locale 	: 'km-KH',
				segment : null,
				contact : banhji.vendors.get('current') !== null ? banhji.vendors.get('current'): null
			});
		},
		removeEntry : function(e) {
			for(var i = 0; i < this.entries.length; i++) {
				if(this.entries[i] === e.data) {
					this.entries.splice(i,1);
					break;
				}
			}
		},
		save 		: function() {
			var entries = [];
			var amount = 0;
			for(var i = 0; i<this.entries.length; i++) {
				amount += kendo.parseFloat(this.entries[i].amount);
			}
			this.get('from').set('memo', this.get('current').memo);
			this.get('from').set('amount', amount);
			entries.push(this.get('from'));
			entries.push(this.entries);
			this.get('current').set('entries', entries);
			if(entries.length > 1) {
				this.entry.save()
				.then(function(data){
					banhji.cashier.deposit.addJournal();
					banhji.cashier.deposit.set('entries', []);
				});
			}
		}
	});
	banhji.cashiers.transfer= kendo.observable({
		accounts 	: [],
		entry 		: banhji.journalEntry,
		segments  	: banhji.segmentItem.ds,
		entries 	: [],
		from 		: {
				memo 	: null,
				amount 	: 0.00,
				is_debit: false,
				account : null,
				rate 	: 1,
				locale 	: 'km-KH',
				segment : null,
				contact : null
		},
		init 		: function() {
			if(banhji.account.dataStore.data().length > 0) {
				for(var i=0; i > banhji.account.dataStore.data().length; i++) {
					if(banhji.account.dataStore.data()[i].type.id === 6) {
						banhji.cashiers.transfer.accounts.push(banhji.account.dataStore.data()[i]);
					}
				}
			} else {
				banhji.account.dataStore.query({
					filter: {field: 'active', operator: '', value: true},
					page: 1,
					pageSize: 500
				}).then(function(e){
					for(var i=0; i < banhji.account.dataStore.data().length; i++) {
						if(banhji.account.dataStore.data()[i].type.id === 6) {
							banhji.cashiers.transfer.accounts.push(banhji.account.dataStore.data()[i]);
						}
					}
				});
			}
		},
		close     : function() {
			window.history.back(-1);
			this.entry.dataStore.cancelChanges();
			this.set('entries', []);
		},
		setCurrent 	: function(current) {
			this.set('current', current);
		},
		addJournal 	: function() {
			this.entry.dataStore.insert(0,{
				reference: null,
				type: 'transfer',
				voucher: null,
				memo: null,
				contact: {id: auth.getLogin().id, name: auth.getLogin().username},
				entries: null
			});
			this.setCurrent(this.entry.dataStore.at(0));
		},
		addEntry 	: function() {
			this.entries.push({
				memo 	: null,
				amount 	: 0.00,
				is_debit: true,
				account : null,
				rate 	: 1,
				locale 	: 'km-KH',
				segment : null,
				contact : banhji.vendors.get('current') !== null ? banhji.vendors.get('current'): null
			});
		},
		removeEntry : function(e) {
			for(var i = 0; i < this.entries.length; i++) {
				if(this.entries[i] === e.data) {
					this.entries.splice(i,1);
					break;
				}
			}
		},
		save 		: function() {
			var entries = [];
			var amount = 0;
			for(var i = 0; i<this.entries.length; i++) {
				amount += kendo.parseFloat(this.entries[i].amount);
			}
			this.get('from').set('memo', this.get('current').memo);
			this.get('from').set('amount', amount);
			entries.push(this.get('from'));
			entries.push(this.entries);
			this.get('current').set('entries', entries);
			if(entries.length > 1) {
				this.entry.save()
				.then(function(data){
					banhji.cashier.transfer.addJournal();
					banhji.cashier.transfer.set('entries', []);
				});
			}
		}
	});

	/*********************
	*   Vendor Section   *
	**********************/
	// dataSource
	banhji.item = {};
	banhji.billDS = new kendo.data.DataSource({
		offlineStorage: "banhji-po",
		transport: {
			read: {
				url: baseUrl + 'bills',
				type: "GET",
				dataType: "json"
			},
			create: {
				url: baseUrl + 'bills',
				type: "POST",
				dataType: "json"
			},
			update: {
				url: baseUrl + 'bills',
				type: "PUT",
				dataType: "json"
			},
			destroy: {
				url: baseUrl + 'bills',
				type: "DELETE",
				dataType: "json"
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
	banhji.itemDS = new kendo.data.DataSource({
		offlineStorage: "banhji-po",
		transport: {
			read: {
				url: baseUrl + 'items',
				type: "GET",
				dataType: "json"
			},
			create: {
				url: baseUrl + 'items',
				type: "POST",
				dataType: "json"
			},
			update: {
				url: baseUrl + 'items',
				type: "PUT",
				dataType: "json"
			},
			destroy: {
				url: baseUrl + 'items',
				type: "DELETE",
				dataType: "json"
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
	// ------ end of dataSource
	banhji.item.record = kendo.observable({
		ds 		: dataStore(baseUrl + "records"),
		takeIn 	: function(data) {
			banhji.item.record.ds.add(data);
		},
		takeOut : function() {
			banhji.item.record.ds.add(data);
		},
		save 	: function() {
			var dfd = $.Deferred();
			banhji.item.record.ds.sync();
			banhji.item.record.ds.bind('requestEnd', function(e) {
				var res = e.response.results;
				if( res ) {
					dfd.resolve({error: false, data: res});
				} else {
					dfd.reject({error: true, data: [], msg: 'error: could not record item to stock.'});
				}
			});
			dfd.promise();
		}
	});
	banhji.payment 	= kendo.observable({
		DS 	: dataStore(baseUrl+'payments'),
		findByBill 	: function(billId) {
			this.DS.filter([
				{field: 'reference_id', operator: '', value: billId },
				{field: 'type', operator: '', value: 'bill' }
			]);
		},
		remove 		: function(data) {
			this.DS.remove(data);
		},
		addNew 		: function(data) {
			this.DS.add({
					amount: data.amount, 
					discount: data.discount, 
					cashier: data.cashier,
					contact: data.contact,
					fine: 0.00, 
					payment_date: new Date(), 
					reference: data.reference, 
					type:'bill', 
					locale: 'km-KH',
					rate: 1,
				});	
		},
		memo 		: "",
		cashAccount : 1,
		close 		: function() {
			this.DS.cancelChanges();
			this.DS.data([]);
			banhji.bill.get('bllToPayList').splice(0, banhji.bill.get('bllToPayList').length);
			var billPlaceholder = new kendo.View("#bill-list-container-tmpl", {model:banhji.bill});
			banhji.view.vendorDash.showIn("#dashboard-container", billPlaceholder);
		},
		save 		: function() {
			var that = this, dfd = $.Deferred();
			this.DS.sync();
			this.DS.bind("requestEnd", function(e){
				var type = e.type;
				var res  = e.response.results;
				if(res) {
					dfd.resolve({type: type, data: res});
				} else {
					dfd.reject({error: true, msg: "problem with api call"});
				}
				return dfd.promise();
			});
		}
	});
	banhji.bill = kendo.observable({
		dataSource 	: new kendo.data.DataSource({
			transport: {
				read 	: {
					url: baseUrl + "bills",
					type: "GET",
					headers: {
						"Entity": getDB()
					},
					dataType: 'json'
				},
				create 	: {
					url: baseUrl + "bills",
					type: "POST",
					headers: {
						"Entity": getDB()
					},
					dataType: 'json'
				},
				update 	: {
					url: baseUrl + "bills",
					type: "PUT",
					headers: {
						"Entity": getDB()
					},
					dataType: 'json'
				},
				destroy : {
					url: baseUrl + "bills",
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
			page: 1,
			serverFiltering: true,
			serverPaging: true,
			pageSize: 100
		}),
		payment 	: banhji.payment,
		vendor 		: function() {
			var vendor = null;
			if(banhji.vendors.get('current')){
				vendor = banhji.vendors.get('current');
			} else {
				//
			}
			return vendor;
		},
		addNew 		: function() {

		},
		paymentArr 	: [],
		cashAccount : 1,
		accountVM 	: banhji.account,
		from 		: new Date(),
		to 			: new Date(),
		paidByCash 	: true,
		dateSort 	: function(e) {
			var selected = e.sender.selectedIndex;
			if(selected === 1) {
				this.set('from', new Date());
				this.set('to', new Date());
			} else if(selected === 2) {
				var date = new Date();
				var first= date.getDate() - date.getDay();
				var last = first + 6;
				var firstDayOfTheWeek = new Date(date.setDate(first));
				var lastDayOfTheWeek = new Date(date.setDate(last));
				this.set('from', firstDayOfTheWeek);
				this.set('to', lastDayOfTheWeek);
			} else if(selected === 3) {
				var date = new Date();
				var firstDayOfMonth = new Date(date.getFullYear(), date.getMonth(), 1);
				var lastDayOfMonth = new Date(date.getFullYear(), date.getMonth() + 1, 0);
				this.set('from', firstDayOfMonth);
				this.set('to', lastDayOfMonth);
			} else if(selected === 4) {
				var date = new Date();
			  	var firstDayOfYear = new Date(date.getFullYear(), 0, 1);
				var lastDayOfYear = new Date(date.getFullYear(), 11, 31);
				this.set('from', firstDayOfYear);
				this.set('to', lastDayOfYear);
			}
		},
		dateList 	: [
			{id: 1, name: 'ថ្ងៃនេះ'},
			{id: 2, name: 'សប្ដាហ៍នេះ'},
			{id: 3, name: 'ខែនេះ'},
			{id: 4, name: 'ឆ្នាំនេះ'}
		],
		all 		: function() {
			this.dataSource.filter(
				{field: "deleted", operator: "", value: 'false'}
			);
		},
		closed 		: function() {
			this.dataSource.filter([
				{field: "deleted", operator: "", value: 'false'},
				{field: "status =", operator: "and", value: 'closed'}
			]);
		},
		open 		: function() {
			this.dataSource.filter([
				{field: "deleted", operator: "", value: 'false'},
				{field: "status !=", operator: "and", value: 'closed'}
			]);
		},
		getCashAccount: function() {
			this.accountVM.dataStore.filter({field: 'account_type_id', operator:'', value: '6'});
		},
		close 		: function() {
			window.history.back(-1);
		},
		setCurrent 	: function(currentBill) {
			this.set('current', currentBill);
		},
		getDetail: function(e) {
			this.setCurrent(e.data);
			banhji.payment.DS.filter([
				{field: 'reference_id', value: e.data.id},
				{field: 'type', value: 'bill'}
			]);
			
		},
		removePmt 	: function(e) {
			this.payment.remove(e.data);
			// console.log("remove payment");
		},
		selectBill	: function(e) {
			var checked = $(e.target).is(':checked');
			if(checked === true) {
				$('.billCheckbox').prop('checked', true);
				for(var i = 0; i < $('.billCheckbox').length; i++) {
					banhji.payment.addNew(e.data.dataSource.data()[i]);						
				}
			} else {
				$('.billCheckbox').prop('checked', false);
				for(var i = 0; i < $('.billCheckbox').length; i++) {
					// banhji.payment.DS.remove(e.data.dataSource.data()[i]);
					var model = banhji.payment.DS.at(i);
					banhji.payment.DS.remove(model);
					console.log(model);
				}	
			}
		},
		singleBillSelect: function(e) {
			if(e.data.makePayment === true) {
				e.data.set('amount', e.data.reference.amount - e.data.reference.paid);
			}
			
		},
		payCommute 	: function(e) {
			// $(e.target).prop('checked', false);
			if(e.data.amount === 0) {
				e.data.set("makePayment", false);
			} else {
				e.data.set("makePayment", true);
			}
		},
		payThoseBills:function() {
			var that = this;
			if(this.get('paymentArr').length > 0) {
				$.each(this.get('paymentArr'), function(i, v){
					if(v.makePayment === true) {
						that.payment.addNew(v);
					}					
				});
				$("#payBillBtn").html("កំពុងប្រត្តិប័ត្រការ");
			} else {
				$("#payBillBtn").html("បង់ប្រាក់");
			}
			that.payment.DS.sync();
			that.payment.DS.bind('requestEnd', function(e){
				var res = e.response.results;
				if(res) {
					
					$.each(res, function(i, v){
						var ap = null, discount = null;
						var entries= [];
						var contact = banhji.vendors.dataSource.get(v.contact.id);
						if(!banhji.vendors.dataSource.get(v.contact.id)) {
							banhji.vendors.dataSource.filter({field: 'id', value: v.contact.id});
						}
						var contact = banhji.vendors.dataSource.get(v.contact.id);
						entries.push(
							{
								account : contact.ap.id,
								contact : v.contact,
								amount 	: v.amount,
								memo   	: that.payment.get('memo'),
								rate 	: 1.0000000,
								locale 	: 'km-KH',
								is_debit: true
							},
							{
								account : that.get('cashAccount'),
								contact : v.contact,
								amount 	: v.amount - v.discount,
								memo   	: that.payment.get('memo'),
								rate 	: 1.0000000,
								locale 	: 'km-KH',
								is_debit: false
							}
						);
						if(v.discount > 0) {
							entries.push({
								account : contact.purchaseDiscount.id,
								contact : v.contact,
								amount 	: v.discount,
								memo   	: that.payment.get('memo'),
								rate 	: 1.0000000,
								locale 	: 'km-KH',
								is_debit: false
							});
						}
						banhji.journalEntry.dataStore.add({
							reference 	: v.reference,
							memo 		: that.payment.get('memo'),
							type 		: "pmt",
							deleted 	: false,
							entries 	: entries
						});
					});
					banhji.journalEntry.save().then(
						function(res){
							banhji.vendors.getBills();
							$("#payBillBtn").html("កត់ត្រាបានសំរេច។");
						},
						function(error) {
							$("#payBillBtn").html("បង់ប្រាក់");
						}
					);	
				} else {
					$("#payBillBtn").html("បង់ប្រាក់");
				}
			});	
		}, 
		billItemDS 	: dataStore(baseUrl + 'bills/items'),
		NumOfPO 	: 0,
		NumOfBill	: 0,
		NumOfBillO	: 0,
		amount 		: 0,
		amountOwed 	: 0,
		addItemToBill: function() {
			this.billItemDS.add({item:{id:null, name:null}, bill:{id: null, amount: null}});
		},
		getOpenBills: function(){
			var that = this;
			this.dataSource.filter([
					{field: 'status !=', operator:'', value: 'closed'},
					{field: 'deleted', operator: '', value: 'false'}
			]);
			this.dataSource.bind('requestEnd', function(e){
				if(e.response.meta) {
					that.set('NumOfPO', e.response.meta.po);
					that.set('NumOfBillO', e.response.meta.invO);
					that.set('NumOfBill', e.response.meta.inv);
					that.set('amountOwed', e.response.meta.balance);
				}
			});
		},
		getOpenPO 	: function(e){
			// console.log(e.data.current.id);
			if(banhji.vendors.get('current')) {
				e.data.billVM.dataSource.filter([
					{field: 'type', operator: '', value: 'po'},
					{field: 'status !=', operator: '', value: 'closed'},
					{field: 'deleted', operator: '', value: 'false'},
					{field: 'vendor', operator: '', value: banhji.vendors.get('current').id}
				]);
			} else {
				e.data.billVM.dataSource.filter([
					{field: 'type', operator: '', value: 'po'},
					{field: 'status !=', operator: '', value: 'closed'},
					{field: 'deleted', operator: '', value: 'false'}
				]);
			}
		},
		getOpenInv	: function(e) {
			if(e.data.current.id) {
				e.data.billVM.dataSource.filter([
					{field: 'type !=', value: 'po'},
					{field: 'status !=', value: 'closed'},
					{field: 'deleted', value: 'false'},
					{field: 'vendor', value: e.data.current.id}
				]);
			} else {
				e.data.billVM.dataSource.filter([
					{field: 'type', value: 'po'},
					{field: 'status !=', value: 'closed'},
					{field: 'deleted', value: 'false'}
				]);
			}
		},
		getOpenInvO	: function(e) {
			var today = new Date();
			var month = today.getMonth() + 1;
			var day = today.getDate() + 1;
			var d = today.getFullYear()+'-'+month+'-'+day;
			if(banhji.vendors.get('current')) {
				e.data.billVM.dataSource.filter([
					{field: 'type !=', operator: '', value: 'purchase'},
					{field: 'type !=', operator: 'or', value: 'expense'},
					{field: 'status !=', operator: '', value: 'closed'},
					{field: 'deleted', operator: '', value: 'false'},
					{field: 'due_date <=', operator: '', value: d},
					{field: 'vendor', operator: '', value: banhji.vendors.get('current').id}
				]);
			} else {
				e.data.billVM.dataSource.filter([
					{field: 'type !=', operator: '', value: 'purchase'},
					{field: 'type !=', operator: 'or', value: 'expense'},
					{field: 'status !=', operator: '', value: 'closed'},
					{field: 'deleted', operator: '', value: 'false'},
					{field: 'due_date <=', operator: '', value: d},
				]);
			}
		},
		unPaidByVendorId: function(id) {
			var that = this;
			this.dataSource.filter([
					{field: 'status !=', operator: '', value: 'closed'},
					{field: 'deleted', operator: '', value: 'false'},
					{field: 'vendor', operator: '', value: id}
			]);
			this.dataSource.bind('requestEnd', function(e){
				var data = e.response.results;
				var po = 0;
				var inv= 0;
				var invO=0;
				var amount = 0;
				var today = new Date();
				// if(data){
				// 	$.each(data, function(i, v){
				// 		if(v.type === 'po') {
				// 			po++;
				// 		} else if(v.type === 'expense' || v.type === 'purchase') {
				// 			var due = new Date(v.due_date);
				// 			if(today.getTime() >= due.getTime()) {
				// 				invO++;
				// 			} 
				// 			inv++;							
				// 		}
				// 		amount = amount + v.balance;
				// 	});
				// } else {
				// 	that.dataSource.data([]);
				// }
				if(e.response.meta) {
					po = e.response.meta.po;
					invO = e.response.meta.invO;
					inv = e.response.meta.inv;
					amount = e.response.meta.balance;
				}
				that.set('NumOfPO', po);
				that.set('NumOfBillO', invO);
				that.set('NumOfBill', inv);
				that.set('amountOwed', amount);
			});
		},
		searchBill 	: function() {
			this.dataSource.filter([
				{field: 'created_at >=', value: kendo.toString(this.get('from'), 'dd-MM-yyyy')},
				{field: 'created_at <=', value: kendo.toString(this.get('to'), 'dd-MM-yyyy')}
			]);
			banhji.bill.get('paymentArr').splice(0,banhji.bill.get('paymentArr').length);
			banhji.bill.dataSource.query({
				filter:[
					{field: 'created_at >=', value: kendo.toString(this.get('from'), 'dd-MM-yyyy')},
					{field: 'created_at <=', value: kendo.toString(this.get('to'), 'dd-MM-yyyy')}
				],
				page: 1,
				skip: 0
			}).then(function(e){
				var data = banhji.vendors.billVM.dataSource.data();
				var date = new Date();
				var today = new Date(date.getFullYear()+"-"+date.getMonth()+"-"+date.getDate());
				$.each(data, function(i, v){
					var discount = 0;
					var due = new Date(v.due_date);
					var overdue = new Date(due.getFullYear()+"-"+due.getMonth()+"-"+due.getDate());
					if(overdue.getTime() >= today.getTime()) {
						discount = (v.amount - v.paid)*(v.payment_term.discount_percentage/100);
					}
					banhji.bill.get('paymentArr').push({
						makePayment: false,
						amount: v.amount - v.paid, 
						discount: discount, 
						cashier: {id: auth.getLogin().id, name: auth.getLogin().username},
						vendor: v.vendor,
						fine: 0.00, 
						payment_date: new Date(), 
						reference: v, 
						type:'bill', 
						locale: 'km-KH',
						rate: 1,
					});
				});

			});
		},
		save 		: function() {
			var dfd = $.Deferred();
			this.dataSource.sync();
			this.dataSource.bind('requestEnd', function(e){
				var results = e.response.results;
				if(results) {
					dfd.resolve(results);
				} else {
					dfd.reject({error: "កត់ត្មិនរាបានសំរេច", msg: "សូមពិនិត្យឡើងវិញ"});
				}
			});
			return dfd.promise();
		}
	});

	banhji.vendors = kendo.observable({
		dataSource 	: dataStore(baseUrl + "vendors"),
		billVM 		: banhji.bill,
		vendorBills : dataStore(baseUrl + "vendors/bills"),
		vendorPhones: dataStore(baseUrl + "vendors/phones"),
		accountDS 	: banhji.account,
		currencyDS 	: banhji.currency,
		bankModel 	: banhji.bank,
		contactTypes: dataStore(baseUrl + "vendors/types"),
		businessType: dataStore(baseUrl + "businesstypes"),
		paymentTerm : dataStore(baseUrl + "paymentterm"),
		key 		: '',
		phoneTypes	: [
			{type: 'phone', description: 'លេខទូស័ព្ទ'},
			{type: 'mobile', description: 'លេខទូស័ព្ទចល័ត'}
		],
		selectModal : function() {
			var dfd = $.Deferred();
			$('body').append("<div id='vendorModal'><div id='vendorModalInner'></div></div>");
			var modal = $("#vendorModal").kendoWindow({
				title: "បញ្ជីអ្នកផ្គត់ផ្គង់",
				modal: true,
				width: 300,
				height: 400,
				// visible: false,
				open: function(e) {
					var grid = $("#vendorModalInner").kendoGrid({
						dataSource: banhji.vendors.dataSource,
						columns: [{field: 'company', title: 'ក្រុមហ៊ុន'}],
						selectable: true,
						scrollable: true,
						height: "380px"
					}).data("kendoGrid");
					grid.bind('change', function(e){
						var selected = this.select();
						var model = this.dataItem(selected);
						banhji.vendors.setCurrent(model);
						banhji.vm.get('current').set('vendor', model);
						dfd.resolve(true);
					});
				}
			}).data('kendoWindow');
			modal.center();
			modal.bind('close', function(e){
				modal.destroy();
			});
			return dfd.promise();
		},
		isEdit 		: false,
		close 		: function() {
			this.dataSource.cancelChanges();
			this.vendorPhones.cancelChanges();
			window.history.back(-1);
		},
		paymentOptions: dataStore(baseUrl + "vendors/paymentMethods"),
		paidByBank 	: false,
		paidByCheck : false,
		getBills 	: function() {
			banhji.bill.get('paymentArr').splice(0,banhji.bill.get('paymentArr').length);
			var filter;
			if(this.get('current')) {
				filter = [
					{field: 'type != ', operator: '', value: 'po'},
					{field: 'deleted', operator: 'and', value: 'false'},
					{field: 'status !=', operator: '', value: 'closed'},
					{field: 'vendor', operator: '', value: this.get('current').id}
				];
			} else {
				filter = [
					{field: 'type != ', operator: '', value: 'po'},
					{field: 'deleted', operator: 'and', value: 'false'},
					{field: 'status !=', operator: '', value: 'closed'}
				];
			}
			this.billVM.dataSource.query({
				filter:filter,
				page: 1,
				skip: 0
			}).then(function(e){
				var data = banhji.vendors.billVM.dataSource.data();
				var date = new Date();
				var today = new Date(date.getFullYear()+"-"+date.getMonth()+"-"+date.getDate());
				$.each(data, function(i, v){
					var discount = 0;
					var due = new Date(v.due_date);
					var overdue = new Date(due.getFullYear()+"-"+due.getMonth()+"-"+due.getDate());
					if(overdue.getTime() >= today.getTime()) {
						discount = (v.amount - v.paid)*(v.payment_term.discount_percentage/100);
					}
					banhji.bill.get('paymentArr').push({
						makePayment: false,
						amount: v.amount - v.paid, 
						discount: discount, 
						cashier: {id: auth.getLogin().id, name: auth.getLogin().username},
						vendor: v.vendor,
						fine: 0.00, 
						payment_date: new Date(), 
						reference: v, 
						type:'bill', 
						locale: 'km-KH',
						rate: 1,
					});
				});
			});
			// var billPlaceholder = new kendo.View("#bill-list-container-tmpl", {model:banhji.bill});

			// if(banhji.vendors.get('current')){
				// banhji.view.vendor.showIn("#vendor-container-tmpl", billPlaceholder);
			// } //else {	
			// 	banhji.view.vendorDash.showIn("#dashboard-container", billPlaceholder);
			// }
		},
		selectBill	: function() {
			alert("select All");
		},
		pays 		: function(e) {
			// var bal = e.data.balance;
			// e.data.set('balance', bal - );
			console.log(e.data);
		},
		departments  : [{department: "sales", description: "ផ្នែកលក់"},{department: "finance", description: "ផ្នែកហិរញ្ញវត្ថុ"}],
		selectPaymentOption: function(e) {
			if(this.get('current').payment_main === null && this.get('current').payment_second === null) {
				this.set('paidByBank', false);
				this.set('paidByCheck', false);
			} else if(this.get('current').payment_main !== null && this.get('current').payment_second === null) {
				if(this.get('current').payment_main.id ===3) {
					this.set('paidByBank', true);
					this.set('paidByCheck', false);
				} else if(this.get('current').payment_main.id ===2) {
					this.set('paidByBank', false);
					this.set('paidByCheck', true);
				} else {
					this.set('paidByBank', false);
					this.set('paidByCheck', false);
				}
			} else if(this.get('current').payment_main === null && this.get('current').payment_second !== null) {
				if(this.get('current').payment_second.id ===3) {
					this.set('paidByBank', true);
					this.set('paidByCheck', false);
				} else if(this.get('current').payment_second.id ===2) {
					this.set('paidByBank', false);
					this.set('paidByCheck', true);
				} else {
					this.set('paidByBank', false);
					this.set('paidByCheck', false);
				}
			} else if(this.get('current').payment_main !== null && this.get('current').payment_second !== null) {
				if(this.get('current').payment_main.id ===3 && this.get('current').payment_second.id ===1) {
					this.set('paidByBank', true);
					this.set('paidByCheck', false);
				} else if(this.get('current').payment_main.id ===3 && this.get('current').payment_second.id ===2) {
					this.set('paidByBank', true);
					this.set('paidByCheck', true);
				} else if(this.get('current').payment_main.id ===2 && this.get('current').payment_second.id ===3) {
					this.set('paidByBank', true);
					this.set('paidByCheck', true);
				} else if(this.get('current').payment_main.id ===1 && this.get('current').payment_second.id ===2) {
					this.set('paidByBank', false);
					this.set('paidByCheck', true);
				}  else if(this.get('current').payment_main.id ===1 && this.get('current').payment_second.id ===3) {
					this.set('paidByBank', true);
					this.set('paidByCheck', false);
				} else if(this.get('current').payment_main.id ===2 && this.get('current').payment_second.id ===1) {
					this.set('paidByBank', false);
					this.set('paidByCheck', true);
				} else if(this.get('current').payment_main.id ===2 && this.get('current').payment_second.id ===3) {
					this.set('paidByBank', true);
					this.set('paidByCheck', true);
				}
				console.log('all is not null');
			}
			// console.log(this.get('current').payment_main);
		},
		addPhone 	: function() {
			if(this.get('current').id) {
				this.get('vendorPhones').add({
					contact_id: this.get('current').id, phone: null, type: "phone", department: 'sales'
				});
			} else {
				this.get('vendorPhones').add({contact_id: null, phone: null, type: "phone", department: 'sales'});
			}	
		},
		addNew 		: function() {
			this.get('dataSource').insert(0,{ 
				currency: {id: 1, code: 'USD'},
				company: null,
				company_en: null,
				type: null,
				bank: null,
				bank_account_number: null,
				bank_account_name: null,
				phone: null,
				email: null,
				website: null,
				is_local: true,
				name_on_cheque: null,
				address: null,
				business_type: null,
				vat_no: null,
				bank_address: null,
				ap: null,
				prepaid: null,
				purchaseDiscount: null,
				credit_limit: null,
				payment_term: null,
				payment_main: null,
				payment_second: null
			});
		},
		remove 		: function() {
			if(this.get('current')) {
				this.dataSource.remove(this.get('current'));
				this.save();
			}
		},
		removePmt 	: function() {
			console.log('sdkjflds');
		},
		removePhone : function(e) {
			var data = e.data;
			this.get('vendorPhones').remove(data);
		},
		search 		: function() {
			if(this.get('key')) {
				this.get('dataSource').filter([
					{field: 'id', operator: '', value: this.get('key')},
					{field: 'company', operator: 'or', value: this.get('key')}
				]);
			} else {
				this.get('dataSource').read();
			}
		},
		onVendorFocus: function() {
			banhji.router.navigate('/vendors/u/list');
		},
		onAccountFocus: function () {
			banhji.router.navigate('/accounts/u/list');
		},
		onCurrencyFocus: function() {
			banhji.router.navigate('/currencies/u/list');
		},
		
		backToVendor: function() {
			if(this.get('current')) {
				return '#/vendors/' + this.get('current').id;
			} else {
				return false;
			}
		},
		getPhone	: function() {
			// get phones for current vendor
			this.vendorPhones.filter({
				field: 'contact_id', value: this.get('current').id
			});
		},
		toDashboard : function() {
			banhji.router.navigate('/vendors', false);
		},
		findBillByVendor: function(vendorId) {
			this.vendorBills.filter([
				{field: 'id', operator: '', value: vendorId}
			]);
		},
		current 	: null,
		setCurrent 	: function(data) {
			this.set('current', data);
		},
		selected 	: function(e) {
			this.setCurrent(e.data);
			this.billVM.unPaidByVendorId(e.data.id);			
			banhji.router.navigate('/vendors/' + e.data.id);
		},
		edit 		: function()  {
			banhji.router.navigate('/vendors/'+this.current.id+'/edit', false);
		},
		
		save 		: function() {
			var validated = $(".vendor-form").kendoValidator().data("kendoValidator");
			var that = this;
			if(validated.validate()) {
				if(this.dataSource.hasChanges()){
					this.dataSource.sync();
					this.dataSource.bind('requestEnd', function(e){
						var type = e.type;
						if(type === 'create') {
							var id = e.response.results[0].id;
							$.each(that.vendorPhones.data(), function(index, value) {
								value.set('contact_id', id);
							});
							that.vendorPhones.sync();
							that.addNew();
						} else if(type==='update') {
							that.vendorPhones.sync();
						}
					});
				} else {
					that.vendorPhones.sync();
				}
				$("#notification").data('kendoNotification').info("កត់ត្រាបានសំរេច");
			} else {
				$("#notification").data('kendoNotification').info("កត់ត្មិនរាបានសំរេច សូមពិនិត្យឡើងវិញ");
			}		
		}
	});

	banhji.itemVM = kendo.observable({
		ds   		: dataStore(baseUrl + "billitems"),
		itemRecord 	: dataStore(baseUrl + "items/records"),
		save 		: function() {
			var dfd = $.Deferred();
			this.ds.sync();
			this.ds.bind("requestEnd", function(e){
				if(e.response.results) {
					dfd.resolve({type: e.type, data: e.response.results});
				} else {
					dfd.reject({error: e.type + " can not be processed."});
				}
			});
			return dfd.promise();
		}
	});
	banhji.vm = kendo.observable({
		ds        : banhji.billDS,
		tax 	  : 0.1,
		classDS   : banhji.segmentItem.ds,
		close     : function() {
			window.history.back(-1);
			this.ds.cancelChanges();
			this.itemDS.ds.cancelChanges();
			console.log('vm');
		},
		test 	  : function() {
			console.log("test VM");
		},
		itemList  : function() {
			var list;
			if(banhji.itemDS.data().length ===0) {
				banhji.itemDS.fetch(function(e){
					list = banhji.itemDS.data();
				});
			} else {
				list = banhji.itemDS.data();
			}
			return list;
		},
		subTotal  : 0,
		taxAmount : 0,
		grandTotal: 0,
		getVendor : function() {
			banhji.vendors.selectModal().done(function(value){
				// if(value) {
					console.log(banhji.vendors.get('current'));
				// }
			});
		},
		itemDS 	  : banhji.itemVM,
		setCurrent: function(currentModel) {
			this.set("current", currentModel);
		},
		addNew 	  : function() {
			this.ds.insert(0,{
				type 			: "po",
				invoice_number 	: null,
				amount 			: 0.00,
				taxAmount		: 0.00,
				paid 			: 0.00,
				status 			: 'open',
				notice 			: null,
				comment 		: null,
				internal_notice	: null,
				due_date 		: new Date(),
				expected_date 	: new Date(),
				payment_term 	: 0,
				segment 		: null,
				delivery_address: null,
				vendor 			: banhji.vendors.get('current') ? banhji.vendors.get('current') : null
			});
			this.setCurrent(this.ds.at(0));
		},
		addItem   : function() {
			this.itemDS.ds.add();
		},
		removeItem: function(e) {
			this.itemDS.ds.remove(e);
		},
		sync 	  : function() {
			var dfd = $.Deferred();
			this.ds.sync();
			this.ds.bind("requestEnd", function(e){
				if(e.response.results) {
					dfd.resolve({type: e.type, data: e.response.results});
				} else {
					dfd.reject({error: e.type + ' can not process.'});
				}
			});
			return dfd.promise();
		},
		getTax 	  : function() {
			var amount = 0;
			$.each(this.itemDS.ds.data(), function(i, v){
				if(v.isTaxed === true) {
					amount += kendo.parseFloat(v.amount);
				}
			});
			this.get("current").set("taxAmount", amount * this.get('tax'));
			this.set('grandTotal', amount * this.get('tax') + kendo.parseFloat(this.get('current').amount));
		},
		total 	  : function() {
			var price = 0;
			$.each(this.itemDS.ds.data(), function(i, v){
				price = price + v.amount;
			});
			this.set('grandTotal', price + this.get('taxAmount'));
			this.get('current').set('amount', price);
		},
		save 	  : function() {
			var that = this;
			var validator = $(".bill-form").kendoValidator().data('kendoValidator');
			if(validator.validate()) {
				this.get('current').set('amount', kendo.parseFloat(this.get('subTotal')));
				this.sync()
				.then(function(res){
					if(res.type === 'create') {
						$.each(that.itemDS.ds.data(), function(i, v) {
							v.set('bill', res.data[0]);
						});
					} else if(res.type === 'update') {
						$.each(that.itemDS.ds.data(), function(i, v) {
							v.set('bill', res.data[0]);
						});
					}
					that.itemDS.save();
					banhji.vm.setCurrent(res.data[0]);
				});
				$(".notification").data('kendoNotification').info("កត់ត្រាបានសំរេច");
			} else {
				$(".notification").data('kendoNotification').info("សូមបំពេញផ្នែកដែលមានសញ្ញា *");
			}	
		}
	});
	banhji.billItem = kendo.observable({
		ds   	: dataStore(baseUrl + "billitems"),
		add 		: function() {
			var number = this.ds.data().length + 1;
			this.ds.add({
				number: number,
				amount: 0.00,
				rate: 0.00,
				unit: 0.00,
				item: null,
				isTaxed: false,
				bill: banhji.vm.get('current') ? banhji.vm.get('current') : null
			});
		},
		remove 		: function(e) {
			this.ds.remove(e.data);
		},
		computeAmount: function(e) {
			e.data.set('amount', kendo.parseFloat(e.data.unit) * kendo.parseFloat(e.data.rate));
			banhji.vm.total();
		},
		save 		: function() {
			var dfd = $.Deferred();
			this.ds.sync();
			this.ds.bind("requestEnd", function(e){
				if(e.response.results) {
					dfd.resolve({type: e.type, data: e.response.results});
				} else {
					dfd.reject({error: e.type + " can not be processed."});
				}
			});
			return dfd.promise();
		}
	});
	banhji.billForm = kendo.observable({
		ds        : banhji.billDS,
		itemDS 	  : banhji.itemVM,
		tax 	  : 0.1,
		classDS   : banhji.segmentItem.ds,
		subTotal  : 0,
		taxAmount : 0,
		grandTotal: 0,
		account   : [],
		disable   : false,
		getDue 	  : function() {
			var numberOfDays = parseInt(banhji.billForm.get('current').vendor.payment_term.term);
			var date = new Date(banhji.billForm.get('current').expected_date);
			date.setDate(date.getDate() + numberOfDays);
			banhji.billForm.get('current').set('due_date', date);
		},
		getAllBill: function(){
			this.ds.query({
				filter: [
					{field: 'deleted', operator: '', value: 'false'},
					{field: 'vendor', operator: '', value: banhji.vendors.get('current').id}
				],
				pageSize: 100,
				page: 1
			});
		},
		getById   : function(id) {
			banhji.billForm.ds.query({
				filter 	: [
					{ field: 'id', operator: '', value: id },
					{ field: 'deleted', operator: '', value: false }
				],
				pageSize: 1,
				page 	: 1
			}).then(function(e){
				var model = banhji.billForm.ds.data()[0];
				if(model) {
					banhji.itemVM.ds.filter({field:'bill_id', operator: '', value: model.id});
					banhji.billForm.setCurrent(model);
				}
			});
		},
		getAccount: function(e) {
			banhji.billForm.account.splice(0,banhji.billForm.account.length);
			if(banhji.account.dataStore.data().length > 0) {
				if(banhji.billForm.get('current').paidCash) {
					$.each(banhji.account.dataStore.data(), function(i, v){
						if(v.type.id === 6) {
							banhji.billForm.account.push(v);
						}
					});
				} else {
					$.each(banhji.account.dataStore.data(), function(i, v){
						if(v.type.id === 11) {
							banhji.billForm.get('account').push(v);
						}
					});
				}
			} else {
				banhji.account.dataStore.query({
					filter: {field: 'active', operator: '', value: 'true'},
					page: 1,
					pageSize: 100
				}).then(function(e){
					if(banhji.billForm.get('current').paidCash) {
						$.each(banhji.account.dataStore.data(), function(i, v){
							if(v.type.id === 6) {
								banhji.billForm.account.push(v);
							}
						});
					} else {
						$.each(banhji.account.dataStore.data(), function(i, v){
							if(v.type.id === 11) {
								banhji.billForm.get('account').push(v);
							}
						});
					}
					// console.log(banhji.account.dataStore.data());
				});
			}	
		},
		fromPO 	  : function() {
			// cancel current data
			// add new based on SO data to current
		},
		getVendor : function() {
			var that = this;
			$('body').append("<div id='vendorModal'><div id='vendorModalInner'></div></div>");
			var modal = $("#vendorModal").kendoWindow({
				title: "បញ្ជីអ្នកផ្គត់ផ្គង់",
				modal: true,
				width: 300,
				height: 400,
				// visible: false,
				open: function(e) {
					var grid = $("#vendorModalInner").kendoGrid({
						dataSource: banhji.vendors.dataSource,
						columns: [{field: 'company', title: 'ក្រុមហ៊ុន'}],
						selectable: true,
						scrollable: true,
						height: "380px"
					}).data("kendoGrid");
					grid.bind('change', function(e){
						var selected = this.select();
						var model = this.dataItem(selected);
						banhji.vendors.setCurrent(model);
						banhji.billForm.get('current').set('vendor', model);
						// dfd.resolve(true);
					});
				}
			}).data('kendoWindow');
			modal.center();
			modal.bind('close', function(e){
				banhji.billForm.get('current').set('vendor', banhji.vendors.get('current'));
				banhji.billForm.getDue();
				modal.destroy();
			});
		},
		setCurrent: function(currentModel) {
			banhji.billForm.set("current", currentModel);
		},
		addNew 	  : function() {
			banhji.billForm.ds.insert(0,{
				type 			: "po",
				invoice_number 	: null,
				account 		: null,
				amount 			: 0.00,
				taxAmount		: 0.00,
				paid 			: 0.00,
				status 			: 'open',
				notice 			: null,
				comment 		: null,
				internal_notice	: null,
				due_date 		: new Date(),
				expected_date 	: new Date(),
				payment_term 	: 0,
				segment 		: null,
				address 		: null,
				delivery_address: null,
				voucher  		: null,
				paidCash 		: true,
				vendor 			: banhji.vendors.get('current') ? banhji.vendors.get('current') : null
			});
			banhji.billForm.setCurrent(this.ds.at(0));
		},
		getTax 	  : function() {
			var amount = 0;
			$.each(banhji.billForm.itemDS.ds.data(), function(i, v){
				if(v.isTaxed === true) {
					amount += kendo.parseFloat(v.amount);
				}
			});
			banhji.billForm.get("current").set("taxAmount", kendo.toString(amount * kendo.parseFloat(banhji.billForm.get('tax')), 'c2'));
			banhji.billForm.set('grandTotal', kendo.toString(banhji.billForm.get("current").taxAmount + kendo.parseFloat(banhji.billForm.get('current').amount), 'c2'));
		},
		total 	  : function() {
			var price = 0;
			$.each(banhji.billForm.itemDS.ds.data(), function(i, v){
				price = price + v.amount;
			});
			banhji.billForm.set('grandTotal', price + banhji.billForm.get('taxAmount'));
			banhji.billForm.get('current').set('amount', kendo.toString(price, 'c2'));
		},
		save 	  : function() {
			var dfd = $.Deferred();
			banhji.billForm.ds.sync();
			banhji.billForm.ds.bind("requestEnd", function(e){
				if(e.response.results) {
					dfd.resolve({type: e.type, data: e.response.results});
				} else {
					dfd.reject({error: e.type + ' can not process.'});
				}
			});
			return dfd.promise();
		}
	});
	banhji.expense = kendo.observable({
		form 	  : banhji.billForm,
		isCash 	  : true,
		itemDS 	  : banhji.itemVM.ds,
		getTax 	  : function(e) {
			var amount = 0;
			$.each(this.itemDS.data(), function(i, v){
				if(v.isTaxed === true) {
					amount += kendo.parseFloat(v.amount);
				}
			});
			this.form.get("current").set("taxAmount", amount * this.form.get('tax'));
			this.set('grandTotal', amount * this.form.get('tax') + kendo.parseFloat(this.get('current').amount));
		},
		close     : function() {
			window.history.back(-1);
			this.form.ds.cancelChanges();
			this.itemDS.cancelChanges();
		},
		accountList  : function() {
			var list;
			if(banhji.account.dataStore.data().length > 0) {
				list = banhji.account.dataStore.data();
			} else {
				banhji.account.dataStore.query({
					filter: {field: 'active', operator: '', value: 'true'},
					pageSize: 1000,
					page: 1
				}).then(function(e){
					list = banhji.account.dataStore.data();
				});
			}
			return list;
		},
		addItem   : function() {
			var number = this.itemDS.data().length + 1;
			this.itemDS.add({
				number: number,
				amount: 0.00,
				rate: 0.00,
				unit: 0.00,
				item: null,
				isTaxed: false,
				bill: banhji.vm.get('current') ? banhji.vm.get('current') : null
			});
		},
		removeItem: function(e) {
			this.itemDS.remove(e.data);
		},
		computeAmount: function(e) {
			e.data.set('amount', kendo.parseFloat(e.data.unit) * kendo.parseFloat(e.data.rate));
			this.form.getTax();
			this.form.total();
		},
		save 	  : function() {
			var that = this;
			var validator = $(".bill-form").kendoValidator().data('kendoValidator');
			if(validator.validate()) {
				// save to bills
				if(this.form.get('current').account === null) {
					this.form.get('current').set('account', banhji.vendors.get('current').ap);
				}
				var amount = kendo.parseFloat(this.form.get('current').amount);
				var tax = kendo.parseFloat(this.form.get('current').taxAmount);
				this.form.get('current').set('amount', amount);
				this.form.get('current').set('taxAmount', tax);
				this.form.save()
				.then(function(res){	
					return res;
				}).then(function(res){
					if(res.type === 'create') {
						$.each(that.itemDS.data(), function(i, v) {
							v.set('bill', res.data[0]);
						});
					} else if(res.type === 'update') {
						$.each(that.itemDS.data(), function(i, v) {
							v.set('bill', res.data[0]);
						});
					}
					return banhji.itemVM.save()
					.then(function(billItems){
						// console.log(billItems);
						var entries = [];
						for(var x = 0; x < billItems.data.length; x++) {
							entries.push({
								amount  : billItems.data[x].amount,
								memo 	: 'purchase-'+res.data[0].id,
								is_debit: true,
								account : {
									id 		: billItems.data[x].item.id,
									code 	: billItems.data[x].item.code,
									name 	: billItems.data[x].item.name
								},
								rate 	: 1,
								locale 	: 'km-KH',
								contact : banhji.vendors.get('current')
							});
						}
						
						entries.push({
							amount  :  res.data[0].amount, //res.data[0].amount,
							memo 	: 'purchase-'+ res.data[0].id,
							is_debit: false,
							account : res.data[0].account,
							rate 	: 1,
							locale 	: 'km-KH',
							contact : {
								id: banhji.vendors.get('current').id,
								company: banhji.vendors.get('current').company
							}
						});
						banhji.journalEntry.addNew({
							reference: res.data[0],
							type: 'purchase',
							memo: 'purchase id-' + res.data[0].id,
							conatact: {id: auth.getLogin().id, name: auth.getLogin().username},
							entries: entries
						});
						return banhji.journalEntry.save();
					})
					.then(function(data){
						$(".notification").data('kendoNotification').info("កត់ត្រាបានសំរេច");
						banhji.purchase.itemDS.data([]);
						banhji.purchase.form.addNew();
						banhji.purchase.form.set('grandTotal', 0);
					}, function(error){
						$(".notification").data('kendoNotification').info("សូមបំពេញផ្នែកដែលមានសញ្ញា *");
					});
				});
				$(".notification").data('kendoNotification').info("កត់ត្រាបានសំរេច");
			} else {
				$(".notification").data('kendoNotification').info("សូមបំពេញផ្នែកដែលមានសញ្ញា *");
			}		
		}
	});
	banhji.purchase = kendo.observable({
		form 	  : banhji.billForm,
		isCash 	  : true,
		itemDS 	  : banhji.itemVM.ds,
		close     : function() {
			window.history.back(-1);
			this.form.ds.cancelChanges();
			this.itemDS.cancelChanges();
		},
		itemList  : function() {
			var list;
			if(banhji.itemDS.data().length ===0) {
				banhji.itemDS.fetch(function(e){
					list = banhji.itemDS.data();
				});
			} else {
				list = banhji.itemDS.data();
			}
			return list;
		},
		addItem   : function() {
			var number = this.itemDS.data().length + 1;
			this.itemDS.add({
				number: number,
				amount: 0.00,
				rate: 0.00,
				unit: 0.00,
				item: null,
				isTaxed: false,
				bill: this.form.get('current') ? this.form.get('current') : null
			});
		},
		removeItem: function(e) {
			this.itemDS.remove(e.data);
		},
		computeAmount: function(e) {
			e.data.set('amount', kendo.parseFloat(e.data.unit) * kendo.parseFloat(e.data.rate));
			this.form.getTax();
			this.form.total();
		},
		save 	  : function() {
			// add to items too
			var that = this;
			var validator = $(".bill-form").kendoValidator().data('kendoValidator');
			if(validator.validate()) {
				// save to bills
				var amount = kendo.parseFloat(this.form.get('current').amount);
				var tax = kendo.parseFloat(this.form.get('current').taxAmount);
				this.form.get('current').set('amount', amount);
				this.form.get('current').set('taxAmount', tax);
				if(this.form.get('current').account === null) {
					this.form.get('current').set('account', banhji.vendors.get('current').ap);
				}
				this.form.get('current').set('amount', kendo.parseFloat(this.form.get('subTotal')));
				this.form.save()
				.then(function(res){	
					return res;
				}).then(function(res){
					if(res.type === 'create') {
						$.each(that.itemDS.data(), function(i, v) {
							v.set('bill', res.data[0]);
						});
					} else if(res.type === 'update') {
						$.each(that.itemDS.data(), function(i, v) {
							v.set('bill', res.data[0]);
						});
					}
					banhji.itemVM.save()
					.then(function(billItems){
						var dfd = $.Deferred();
						for(var i = 0; i < billItems.data.length; i++) {
							// models = {id: null, amount: 0.00, unit: 1, is_in: true, item:{id: 1, sku: 'ewew', name: 'dfsfds'}}
							banhji.itemVM.itemRecord.add({
								amount 	: billItems.data[i].amount,
								unit 	: billItems.data[i].unit,
								is_in 	: true,
								item 	: {
									id 	: billItems.data[i].item.id,
									sku : billItems.data[i].item.sku,
									name: billItems.data[i].item.name
								}
							});
						}
						banhji.itemVM.itemRecord.sync();
						banhji.itemVM.itemRecord.bind('requestEnd', function(e){
							var r = e.response.results;
							if(r) {
								dfd.resolve(r);
							} else {
								reject('error');
							}
						});
						return dfd.promise();
					})
					.then(function(records){
						var entries = [];
						for(var x = 0; x < records.length; x++) {
							var itemAccounts= banhji.itemDS.get(records[x].item.id);
							var inventoryAC = null;
							for(var y = 0; y < itemAccounts.accounts.length; y++) {
								if(itemAccounts.accounts[y].type === 'inventory') {
									inventoryAC = itemAccounts.accounts[y];
									break;
								}
							}
							entries.push({
								amount  : 256, //res.data[0].amount,
								memo 	: 'purchase-'+res.data[0].id,
								is_debit: true,
								account : inventoryAC,
								rate 	: 1,
								locale 	: 'km-KH',
								contact : banhji.vendors.get('current')
							});
						}
						entries.push({
							amount  : 256, //res.data[0].amount,
							memo 	: 'purchase-'+res.data[0].id,
							is_debit: false,
							account : banhji.billForm.get('current').account !== null ? banhji.billForm.get('current').account : banhji.vendors.get('current').ap,
							rate 	: 1,
							locale 	: 'km-KH',
							contact : banhji.vendors.get('current')
						});
						banhji.journalEntry.addNew({
							reference: res.data[0],
							type: 'purchase',
							memo: 'purchase id-' + res.data[0].id,
							conatact: {id: auth.getLogin().id, name: auth.getLogin().username},
							entries: entries
						});
						return banhji.journalEntry.save();
					})
					.then(function(data){
						$(".notification").data('kendoNotification').info("កត់ត្រាបានសំរេច");
						banhji.purchase.form.addNew();
						banhji.purchase.itemDS.data([]);
					}, function(error){
						$(".notification").data('kendoNotification').info("សូមបំពេញផ្នែកដែលមានសញ្ញា *");
					});
				});
				$(".notification").data('kendoNotification').info("កត់ត្រាបានសំរេច");
			} else {
				$(".notification").data('kendoNotification').info("សូមបំពេញផ្នែកដែលមានសញ្ញា *");
			}	
		}
	});

		//DAWINE -----------------------------------------------------------------------------------------	
	banhji.customerCenter = kendo.observable({		
		txtSearch 		: "",
		company_id 		: null,
		contact_type_id : null,
		currency_id 	: null,
		customer 		: null,
				
		date_sorter 	: "month",
		start_date 		: new Date(),
		end_date 		: new Date(),

		totalSO 		: 0,
		totalEstimate 	: 0,
		totalOpenInvoice: 0,
		totalOverDue 	: 0,
		balance 		: kendo.toString(0, "c"),

		customerDS 		: dataStore(baseUrl + "contacts/index"),		
		companyDS 		: dataStore(baseUrl + "contacts/company"),
		currencyDS 		: dataStore(baseUrl + "contacts/currency"),
		outstandingDS 	: dataStore(baseUrl + "invoices/outstanding"),
		invoiceDS 	 	: dataStore(baseUrl + "invoices/index"),

		currentPage 	: "dashBoard",			
		monthlySaleList : [],		
		statementCollectionList : [],
		
		pageLoad 		: function(customer_id){		

														
		},
		goDashBoard		: function(e){
			e.preventDefault();
			this.set("currentPage", "dashBoard");
			banhji.router.navigate("#/customers");						
			
			this.loadOutStandingInvoice();														
		},
		goCustomerDashBoard		: function(e){
			e.preventDefault();
			this.set("currentPage", "dashBoard");
			banhji.router.navigate("#/customers");			

			var customer = this.get("customer");
			this.loadOutStandingInvoice(customer.id);							
		},	
		goDetail		: function(e){
			e.preventDefault();				
			this.set("currentPage", "customerDetail");

			var customer = this.get("customer");			
			banhji.router.navigate("#/customer/" + customer.id);								
		},				
		goStatement		: function(e){
			e.preventDefault();
			this.set("currentPage", "statement");

			var customer = this.get("customer");
			banhji.router.navigate("#statement/" + customer.id);				
		},			
		openOptionsWindow	: function(){
         	var window = $("#options-window").data("kendoWindow");
          	window.title("ការស្វែងរកតាមលក្ខណ:ពិសេស");          	
          	window.center().open();         	
      	},
      	closeOptionsWindow: function(){
      		this.search();

      		var window = $("#options-window").data("kendoWindow");          	         	
          	window.close();          	          	
      	},
      	search 			: function(){
      		var para = Array(),
      		txtSearch = this.get("txtSearch"), 
      		company_id = this.get("company_id"), 
      		contact_type_id = this.get("contact_type_id"),
      		currency_id = this.get("currency_id");
      		
      		if(txtSearch){
      			para.push(
      				{ field: "number", operator: "like", value: txtSearch },
      				{ field: "surname", operator: "or_like", value: txtSearch },
					{ field: "name", operator: "or_like", value: txtSearch },
					{ field: "company", operator: "like", value: txtSearch }
      			);
      		}

      		if(company_id){
      			para.push({ field: "company_id", value: company_id });
      		}

      		if(contact_type_id){
      			para.push({ field: "contact_type_id", value: contact_type_id });
      		}

      		if(currency_id){
      			para.push({ field: "currency_id", value: currency_id });
      		}

      		this.customerDS.filter(para);
      	},
      	loadOutStandingInvoice : function(customer_id){
			var self = this;

			if(customer_id){
				this.outstandingDS.filter({ field: "contact_id", value: customer_id });				
			}else{					
				this.outstandingDS.filter([]);			
			}
			
			this.outstandingDS.bind("requestEnd", function(e){
				var response = e.response.results;
				var locale = response[0].locale;
				self.set("totalEstimate", response[1].totalEstimate);
			  	self.set("totalSO", response[2].totalSO);
			  	self.set("totalOpenInvoice", response[3].totalOpenInvoice);
			  	self.set("totalOverDue", response[4].totalOverDue);
			  	self.set("balance", kendo.toString(response[5].balance, "c0", locale));	
			});							
		},
		loadOpenEstimate: function(){
			var customer = this.get("customer");
			if(customer!==null){
				this.invoiceDS.filter([
					{ field: "contact_id", value: customer.id },
					{ field: "type", value: "Estimate" },
	        		{ field: "status", value: 0 }
				]);				
			}else{
				this.invoiceDS.filter([					
					{ field: "type", value: "Estimate" },
	        		{ field: "status", value: 0 }
				]);
			}			
		},
		loadOpenSO 		: function(){
			var customer = this.get("customer");
			if(customer!==null){
				this.invoiceDS.filter([
					{ field: "contact_id", value: customer.id },
					{ field: "type", value: "SO" },
	        		{ field: "status", value: 0 }
				]);				
			}else{
				this.invoiceDS.filter([					
					{ field: "type", value: "SO" },
	        		{ field: "status", value: 0 }
				]);
			}						
		},
		loadOpenInvoice : function(){
			var customer = this.get("customer");
			if(customer!==null){
				this.invoiceDS.filter([
					{ field: "contact_id", value: customer.id },
					{ field: "type", operator: "where_in", value: ["Invoice", "eInvoice", "wInvoice"] },
	        		{ field: "status", operator: "where_in", value: [0,2] }
				]);				
			}else{
				this.invoiceDS.filter([					
					{ field: "type", operator: "where_in", value: ["Invoice", "eInvoice", "wInvoice"] },
	        		{ field: "status", operator: "where_in", value: [0,2] }
				]);
			}							
		},
		loadOverDueInvoice: function(){
			var customer = this.get("customer");
			if(customer!==null){
				this.invoiceDS.filter([
					{ field: "contact_id", value: customer.id },
					{ field: "type", operator: "where_in", value: ["Invoice", "eInvoice", "wInvoice"] },
	        		{ field: "status", operator: "where_in", value: [0,2] },
	        		{ field: "due_date <", value: kendo.toString(new Date(), "yyyy-MM-dd") }
				]);				
			}else{
				this.invoiceDS.filter([					
					{ field: "type", operator: "where_in", value: ["Invoice", "eInvoice", "wInvoice"] },
	        		{ field: "status", operator: "where_in", value: [0,2] },
	        		{ field: "due_date <", value: kendo.toString(new Date(), "yyyy-MM-dd") }
				]);
			}			
		}				
	});
	banhji.customer = kendo.observable({
		customer 	: null,
		originalNo	: null,		
		isCompany 	: true,
		isDuplicateNumber: false,

		dataSource 	: dataStore(baseUrl + "contacts/index"),
		subDataSource : dataStore(baseUrl + "contacts/index"),
		companyDS : dataStore(baseUrl + "contacts/company"),
		genders		: ["M", "F"],
		statusList 	: [            
			{ "id": 1, "name": "កំពុងប្រើប្រាស់" },
			{ "id": 2, "name": "ផ្អាក់ប្រើប្រាស់" },
			{ "id": 0, "name": "ឈប់ប្រើប្រាស់" }
        ],		
		
		pageLoad 	: function(id){						
			if(id){						
				this.loadCustomer(id);
			}else{				
				this.addEmpty();
			}			
		},
		loadCustomer: function(id){
			
		},
      	generateNumber : function(id){
      		var self = this;
      		var company = this.companyDS.get(id);

			this.subDataSource.query({
				sort: { field:"number", dir: "desc" },
				filter: [
					{ field:"company_id", value: id },
					{ field:"contact_type_id", operator: "where_in", value: [4,5,6,7,8,9] },
				],
				page: 1,
				pageSize: 1
			}).then(function(e){
				var view = self.subDataSource.view();				
						            	
            	var no = 0;
            	var header = company.abbr;
            	if(view.length>0){
            		var lastNo = view[0].number;

            		if(lastNo.length>header.length){
						no = kendo.parseInt(lastNo.substr(header.length));
					}					
				}
				no++;														
				var cusNo = header + kendo.toString(no, "0000");
				var cus = self.get("customer");
            	cus.set("number", cusNo);
			});						
		},
		checkExistingNumber : function(){
			var self = this;	
			
			var number = this.get("customer").number;
			var originalNo = this.get("originalNo");
			
			if(number.length>0 && number!==originalNo){
				this.subDataSource.query({
					filter: { field:"number", value: number },
					page: 1,
					pageSize: 1
				}).then(function(e){
					var view = self.subDataSource.view();
					
					if(view.length>0){
				 		self.set("isDuplicateNumber", true);						
					}else{
						self.set("isDuplicateNumber", false);
					}
				});							
			}			
		},
      	addEmpty 	: function(){
			this.dataSource.add({
				company_id 		: 0,				
				currency_id 	: 0,
				user_id 		: 0,
				contact_type_id : 0,														
				number			: "",			
				surname			: "",	
				name			: "",				  	  
				gender			: "M",	
				dob				: "",
				pob				: "",									
				family_member	: "",
				id_number 		: "",
				phone 			: "",
				email 			: "",
				job				: "",
				company			: "",
				vat_no 			: "",
				image_url 		: "",
				memo			: "",
				address 		: "",	
				credit_limit	: "",				
				status			: 1,							
				registered_date	: new Date(),							

				account_receiveable_id : 0,
				revenue_account_id : 0
			});
			
			var data = this.dataSource.data();			
			var newData = data[data.length - 1];			
			this.set("customer", newData);	
		},
		cancel: function(e){
			e.preventDefault();

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
				}				
			});
		}
	});

	banhji.invoice =  kendo.observable({
		isLoaded 			: false,
		receiptLoaded 		: false,
		soLoaded 			: false,
		estimateLoaded 		: false,
		gdnLoaded 			: false,
		company_id 			: 0,			

		biller				: 0,
		sub_code 			: "km-KH",
		rate 				: 1,
		type 				: "Invoice",			
		current_company_id 	: 0,
		
		invoice 			: null,
		invoice_id 			: 0,
		old_balance 		: 0,					
		customer 			: null,			
		bolReference 		: false,
		isEdit 				: false,
		totalQuantity		: 0,

		itemList 			: [],			
		vatList 			: [],			
		cashAccountList 	: [],			
		
		paymentTermDS		: [],
		paymentMethodList	: [],
		invoiceItemList		: [],
		referenceList 		: [],
						
		pageLoad 			: function(type, customer_id){
			//Clear existing invoice				
			this.set("isEdit", false);				
			this.set("bolReference", false);				
			this.set("sub_total", "");
			this.set("invoice_id", 0);

			this.loadData();			
				
			var cus = banhji.ds.peopleDS.get(customer_id);
			var com = banhji.ds.companyDS.get(cus.company_id);

		  	this.set("customer", cus);						  						  						  	
		  	this.set("sub_code", cus.sub_code);
		  	this.set("type", type);						  					  	
		  							  	
		  	this.setItemSource(type, cus.company_id);

		  	var rate = banhji.ds.viewModel.getRate(com.based_currency, cus.currency_code);
		  	this.set("rate", rate);			  	

		  	if(this.get("isLoaded")===false || this.get("receiptLoaded")===false || this.get("soLoaded")===false || this.get("estimateLoaded")===false || this.get("gdnLoaded")===false){
		  		this.addEmptyInvoice();	
		  	}																							
		},
		loadData 			: function(){					
			this.setCashAccount();
			this.setItemSource();					
		},			
		closeX 				: function(){
			this.clear();
			
			kendo.fx($("#slide-form")).slideIn("up").play();							
			window.history.go(-1);
		},		    		    		    	    			
		
		//Setup			
	    setCashAccount		: function(){
	    	var self = this;
	    	this.set("cashAccountList", []);		    			    	
			$.each(banhji.ds.accountDS.data(), function(index, value) {					
				if(value.account_type_id==="6"){							    					    				
	    			self.get("cashAccountList").push({
		    			id 		: value.id,
		    			name 	: value.code +' '+ value.name	    			
		    		});					    	
		    	}				    						    							    		
	    	});			    						
	    },			
	    setItemSource 		: function(type){
	    	var self = this;

	    	this.set("itemList", []);
	    	this.set("vatList", []);
	    				    	
			$.each(banhji.ds.itemDS.data(), function(index, value) {																																
				if(value.item_type_id==="6"){																			    				    		
		    		self.get("vatList").push({
		    			id 		: value.id,
		    			name 	: value.name	    			
		    		});						    		
		    	}else{					    		
		    		if(value.item_type_id==="5"){
		    			if(type==="Receipt"){					    			
			    			self.get("itemList").push({
				    			id 		: value.id,
				    			name 	: value.item_sku +' '+ value.name	    			
				    		});
			    		}					    		
	    			}else{
	    				if(value.parent_id>0){				    					    				
			    			self.get("itemList").push({
				    			id 		: value.id,
				    			name 	: value.item_sku +' '+ value.name	    			
				    		});
		    			}
			    	}							    	
		    	}			    					    						    							    		
	    	});			    						
	    },		    	    
					
		//References			
		loadReference 		: function(e){				
			var type = e.sender._selectedValue;

			if(type!==""){
				this.set("bolReference", true);

				var customer_id = this.get("customer").id;
			
				referenceDS.filter([
						{ field: "customer_id", value: customer_id },
						{ field: "status", value: 0 },
						{ field: "type", value: type }
				]);
			}else{
				this.clear();
				this.addEmptyInvoice();
			}								
		},			
		loadEdit 			: function(invoice_id){				
			this.set("isEdit", true);
			this.set("invoice_id", invoice_id);
						
			var invoice = banhji.ds.invoiceDS.get(invoice_id);

			this.loadData(invoice.company_id);
		  	this.setItemSource(invoice.type, invoice.company_id);

	  		var t = kendo.parseFloat(invoice.amount)/invoice.rate;
	  		var v = kendo.parseFloat(invoice.vat)/invoice.rate;
			var sub = t - v;
			this.set("sub_total", kendo.toString(sub, "c", invoice.sub_code));													  	

			//Status
			if(invoice.status==1){
				this.set("paid", true);
			}else{
				this.set("paid", false);
			}				
  			
  			var customer = banhji.ds.peopleDS.get(invoice.customer_id);
			this.set("customer", customer);

			this.set("type", invoice.type);	
		  	this.set("old_balance", t);
		  	this.set("rate", invoice.rate);											
			this.set("sub_code", invoice.sub_code);				
	  		
	  		invoice.set("amount", kendo.toString(t, "c", invoice.sub_code));
			invoice.set("vat", kendo.toString(v, "c", invoice.sub_code));
			invoice.set("issued_date", new Date(invoice.issued_date));
			invoice.set("due_date", new Date(invoice.due_date));
			invoice.set("expected_date", new Date(invoice.expected_date));					

			this.set("invoice", invoice);
			banhji.ds.invoiceItemDS.filter({ field: "invoice_id", value: invoice.id });			
		},
	    			
		autoIncreaseNo 		: function(){
			$(".sno").each(function(index,element){                 
			   $(element).text(index + 1); 
			});
		},
		addEmptyInvoice 	: function(){
			var cus = this.get("customer");

			var duedate = new Date();
			duedate.setDate(duedate.getDate()+7);				

			banhji.ds.invoiceDS.add({
	    		number 			: "",
			   	type			: this.get("type"),				   		   					   				   	
			   	amount			: 0,
			   	rate			: 0,
			   	vat				: 0,
			   	vat_id			: "",
			   	status 			: 0,
			   	sub_code		: this.get("sub_code"),
			   	issued_date 	: new Date(),
			   	due_date 		: duedate,
			   	expected_date 	: new Date(),
			   	month_of		: new Date(),			   	
			   	address 		: cus.address,
			   	biller 			: this.get("biller"),
			   	cashier 		: this.get("biller"),
			   	customer_id 	: cus.id,
			   	reference_type	: "",
			   	reference_id  	: 0,
			   	check_no 		: "",
			   	payment_method_id : 0,				   	
				payment_term_id	: 0,
				cash_account_id : 0,			   	
			   	class_id 		: cus.class_id,
			   	transformer_id 	: cus.transformer_id,
			   	memo 			: "",
			   	memo2			: "",
			   	company_id		: cus.company_id				
	    	});

	    	this.addNewRow();  	
			
			var data = banhji.ds.invoiceDS.data();
			var invoice = data[data.length-1];				
			invoice.set("dirty", true);
			this.set("invoice", invoice);
		},
		addNewRow 			: function(){				
			var invoice_id = 0;
			if(this.get("isEdit")){
				invoice_id = this.get("invoice_id");
			}
			
			banhji.ds.invoiceItemDS.add({					
				invoice_id 	: invoice_id,
				item_id 	: "",
				description : "",				
				quantity 	: 1,
				unit_price 	: 0,												
				amount 		: 0,
				rate		: this.get("rate"),
				sub_code	: this.get("sub_code"),
				vat 		: false,
				so_id		: 0		
			});
			this.autoIncreaseNo();															
		},
		removeRow 			: function(e){						
			var d = e.data;				
			banhji.ds.invoiceItemDS.remove(d);
	        this.change();		        
		},		
		change				: function(){
			var invoice = this.get("invoice");

			if(banhji.ds.invoiceItemDS.total()>0){			
				var subTotal = 0;
				var vat = 0;
				var vatAmount = 0;
				var totalQty = 0;

				var vat_id = invoice.vat_id;													
				if(vat_id>0 && vat_id!=null){				
					var vatItem = banhji.ds.itemDS.get(vat_id);						
					vatAmount = vatItem.price;
				}

				$.each(banhji.ds.invoiceItemDS.data(), function(index, data) {				
					var amt = data.quantity * data.unit_price;
					subTotal += amt;

					if(data.vat && vatAmount>0){
						vat += amt * vatAmount;						
					}

					totalQty += data.quantity;
		        });

		        var total = subTotal + vat;			

		        this.set("sub_total", kendo.toString(subTotal, "c", invoice.sub_code));
		        invoice.set("vat", kendo.toString(vat, "c", invoice.sub_code));			
				invoice.set("amount", kendo.toString(total, "c", invoice.sub_code));
				this.set("totalQuantity", totalQty);

				this.autoIncreaseNo();			    	
	    	}else{
	    		this.set("sub_total", kendo.toString(0, "c", invoice.sub_code));
		        invoice.set("vat", kendo.toString(0, "c", invoice.sub_code));			
				invoice.set("amount", kendo.toString(0, "c", invoice.sub_code));
				this.set("totalQuantity", 0);
	    	}    	
		},
		itemChange 			: function(e){								
			var data = e.data;				
	        var rate = this.get("rate");		        
	        var item = banhji.ds.itemDS.get(data.item_id);		 
	        		        
    		data.set("description", item.name);
	        data.set("unit_price", item.price/rate);
	        	        
	        this.change();	                	        	
		},
		referenceChange 	: function(e){
			var self = this;

			var id = e.sender._selectedValue;
			var invoice = this.get("invoice");
			
			if(id>0 || id!==""){					
			 	var d = referenceDS.get(id);			

			 	if(d.vat_id>0){
		  			invoice.set("vat_id", d.vat_id);
		  		}

		  		var t = kendo.parseFloat(d.amount)/d.rate;
		  		var v = kendo.parseFloat(d.vat)/d.rate;

			 	invoice.set("amount", kendo.toString(t, "c", d.sub_code));
			  	invoice.set("rate", d.rate);						
				invoice.set("vat", kendo.toString(v, "c", d.sub_code));
				invoice.set("sub_code", d.sub_code);
				invoice.set("address", d.address);					
				invoice.set("memo", d.memo);
				invoice.set("memo2", d.memo2);

			 	invoice.set("reference_id", id);

			 	referenceItemDS.filter({ field:"invoice_id", value: id });
			 	referenceItemDS.bind("requestEnd", function(e){
			 		var subTotal = 0;
					var vat = 0;
					var vatAmount = 0;

					var vat_id = invoice.vat_id;													
					if(vat_id>0 && vat_id!=null){				
						var vatItem = banhji.ds.itemDS.get(vat_id);						
						vatAmount = vatItem.price;
					}

					banhji.ds.invoiceItemDS.data([]);
					$.each(e.response.results, function(index, value) {
						value.id = 0;				
						var amt = value.quantity * value.unit_price;
						subTotal += amt;

						if(value.vat && vatAmount>0){
							vat += amt * vatAmount;						
						}

						//Add new item
						banhji.ds.invoiceItemDS.add({					
							invoice_id 	: 0,
							item_id 	: value.item_id,
							description : value.description,				
							quantity 	: value.quantity,
							unit_price 	: value.unit_price,												
							amount 		: value.amount,
							rate		: value.rate,
							sub_code	: value.sub_code,
							vat 		: value.vat,
							so_id		: value.so_id		
						});
			        });

			        var total = subTotal + vat;

			        self.set("sub_total", kendo.toString(subTotal, "c", invoice.sub_code));
			        invoice.set("vat", kendo.toString(vat, "c", invoice.sub_code));			
					invoice.set("amount", kendo.toString(total, "c", invoice.sub_code));

					self.autoIncreaseNo();			    		
			 	});				 				 				 				 				
			}else{					
				this.clear();
				this.addEmptyInvoice();
			}								
		},
		clear 				: function(){
			this.set("sub_total", 0);
			this.set("invoice", null);

			banhji.ds.invoiceDS.cancelChanges();
			banhji.ds.invoiceItemDS.cancelChanges();

			//banhji.ds.invoiceDS.data([]);
			banhji.ds.invoiceItemDS.data([]);												
		},
		
		//Actions
		save 				: function(){				
	    	var self = this;
	    	
			this.invoiceSync()
			.then(function(invoice){					
				if(invoice.type==="Invoice" || invoice.type==="Receipt"){
					self.addJournal();						
				}
				
				self.invoiceItemSync(invoice.id);	    			
			});
		},
		update 				: function(){
			var self = this;

			this.invoiceSync()
			.then(function(invoice){					
				banhji.ds.invoiceItemDS.sync();					
			}).then(function(){
				self.closeX();
			});
		},		    		    
	    
	    //Create
	    invoiceSync 				: function(){
	    	var dfd = $.Deferred();

			var rate = this.get("rate");
			var invoice = this.get("invoice");
			var t = invoice.amount;		       
	        var v = invoice.vat;
	        
			var amt = Number(t.replace(/[^0-9\.]+/g,""));
			var vat = Number(v.replace(/[^0-9\.]+/g,""));
	        
	        invoice.set("amount", amt*rate);
	        invoice.set("vat", vat*rate);
	        invoice.set("rate", rate);

	        //Receipt
	        if(invoice.type==="Receipt"){
	        	invoice.set("paid", amt*rate);
	        }
	        				
			//Update customer balance	    
			if(invoice.type==="Invoice"){
				var cus = this.get("customer");
				var cusBalance = kendo.parseFloat(cus.balance);
				var balance = 0;

				if(this.get("isEdit")){
					var oldBalance = this.get("old_balance");
					if(oldBalance!==amt){										    	
			    		balance = (cusBalance - oldBalance) + amt;
			    	}
				}else{
					balance = cusBalance + amt;
				}

				cus.set("balance", balance);
				banhji.ds.peopleDS.sync();						
			}

			//Update references
			if(invoice.reference_id>0){
				var ref = referenceDS.get(invoice.reference_id);
				ref.set("status", 1);
				referenceDS.sync();
			}

	    	banhji.ds.invoiceDS.sync();
		    banhji.ds.invoiceDS.bind("requestEnd", function(e){			    	
				dfd.resolve(e.response.results);    				
		    });

		    return dfd;	    		    	
	    },
	    invoiceItemSync 	: function(invoice_id){
	    	var dfd = $.Deferred();
	    	var self = this;
	    	$.each(banhji.ds.invoiceItemDS.data(), function(index, value){										
				value.set("invoice_id", invoice_id);
			});

	    	banhji.ds.invoiceItemDS.sync();
		    banhji.ds.invoiceItemDS.bind("requestEnd", function(e){		    	
				dfd.resolve(e.response.results);
				self.clear();
				self.addEmptyInvoice();   				
		    });

		    return dfd;
	    },		    	    	  
	    addJournal 			: function(){
	    	var self = this;
	    	var invoice = this.get("invoice");
	    	var customer = this.get("customer");

			var journalEntries = [];				
			var saleList = {};			
			var inventoryList = {};
			var cogsList = {};
			var witdrawList = {};
			var depositAmount = 0;
			var rate = this.get("rate");
			
			//Arrange sale, cogs, inventory, customer deposit or widraw
			$.each(banhji.ds.invoiceItemDS.data(), function(index, data){								
				var item = banhji.ds.itemDS.get(data.item_id);
				var amt = data.quantity*data.unit_price;						

				//Add sale list
				var incomeID = kendo.parseInt(item.income_account_id);											
				if(incomeID>0){
					if(saleList[incomeID]===undefined){
						saleList[incomeID]={"id": incomeID, "amt": amt};						
					}else{											
						if(saleList[incomeID].id===incomeID){
							saleList[incomeID].amt += amt;
						}else{
							saleList[incomeID]={"id": incomeID, "amt": amt};
						}
					}
				}								

				switch(kendo.parseInt(item.item_type_id)){		        
					case 1: //Inventory
					
						//Add cogs list
						var itemCost = data.quantity*item.cost;
						var cogsID = kendo.parseInt(item.cogs_account_id);
						if(cogsList[cogsID]===undefined){
							cogsList[cogsID]={"id": cogsID, "amt": itemCost};						
						}else{											
							if(cogsList[cogsID].id===cogsID){
								cogsList[cogsID].amt += itemCost;
							}else{
								cogsList[cogsID]={"id": cogsID, "amt": itemCost};
							}
						}						

						//Add inventory list
						var inventoryID = kendo.parseInt(item.general_account_id);
						if(inventoryList[inventoryID]===undefined){
							inventoryList[inventoryID]={"id": inventoryID, "amt": itemCost};						
						}else{											
							if(inventoryList[inventoryID].id===inventoryID){
								inventoryList[inventoryID].amt += itemCost;
							}else{
								inventoryList[inventoryID]={"id": inventoryID, "amt": itemCost};
							}
						}										

					  	break;
					case 5: //Customer Deposit
						depositAmount += amt;
						var depositID = kendo.parseInt(item.general_account_id);

						if(amt>0){ //Deposit														
							if(saleList[depositID]===undefined){
								saleList[depositID]={"id": depositID, "amt": amt};						
							}else{											
								if(saleList[depositID].id===depositID){
									saleList[depositID].amt += amt;
								}else{
									saleList[depositID]={"id": depositID, "amt": amt};
								}
							}																			
						}else{ //Witdraw												
							if(witdrawList[depositID]===undefined){
								witdrawList[depositID]={"id": depositID, "amt": amt*-1};						
							}else{											
								if(witdrawList[depositID].id===depositID){
									witdrawList[depositID].amt += (amt*-1);
								}else{
									witdrawList[depositID]={"id": depositID, "amt": amt*-1};
								}
							}														
						}

					  	break;					
					default:
				  	//default here
				} //End Swtich
			});//End Foreach Loop

			//VAT
			var vatID = invoice.vat_id;			
			if(vatID>0 || vatID!==""){
				var vats = banhji.ds.itemDS.get(vatID);
				var vatOutID = vats.income_account_id;
				
				if(vatOutID>0){
					var vatAmt = kendo.parseFloat(this.get("vat"))*rate;
					if(saleList[vatOutID]===undefined){
						saleList[vatOutID]={"id": vatOutID, "amt": vatAmt};						
					}else{											
						if(saleList[vatOutID].id===vatOutID){
							saleList[vatOutID].amt += vatAmt;
						}else{
							saleList[vatOutID]={"id": vatOutID, "amt": vatAmt};
						}
					}
				}
			}			
			
			//Sale list	to journal		
			if(!jQuery.isEmptyObject(saleList)){								
				//Sum cash
				var cash = 0;				
				$.each(saleList, function(index, value){					
					cash += value.amt;					
				});				

				//A/R on Dr							
				banhji.journalEntry.add({
					journal_id	: 0,
			 		account 	: customer.account_receiveable_id, 
			 		dr 			: cash*rate, 
			 		cr 			: 0,
			 		class_id 	: invoice.class_id, 
			 		memo 		: invoice.memo, 
			 		exchange_rate: rate,
				 	main 		: 0				 		
				});

				//Sale accounts on Cr
				$.each(saleList, function(index, value){
					banhji.journalEntry.add({
						journal_id	: 0,
				 		account 	: value.id,	 		
				 		dr 			: 0, 
				 		cr 			: value.amt*rate,
				 		class_id  	: invoice.class_id,
				 		memo 		: invoice.memo,
				 		exchange_rate: rate,
					 	main 		: 0	 		
					});
				});
			}

			//Inventory to journal
			//COGS on Dr 			
			if(!jQuery.isEmptyObject(cogsList)){							
				$.each(cogsList, function(index, value){				
					banhji.journalEntry.add({
						journal_id 	: 0,
				 		account 	: value.id,	 		
				 		dr 			: value.amt*rate, 
				 		cr 			: 0,
				 		class_id  	: invoice.class_id,
				 		memo 		: invoice.memo,
				 		exchange_rate: rate,
					 	main 		: 0	 		
					});	
				});							
			}
			//Inventory on Cr
			if(!jQuery.isEmptyObject(inventoryList)){
				$.each(inventoryList, function(index, value){					
					banhji.journalEntry.add({
						journal_id 	: 0,
				 		account 	: value.id,	 		
				 		dr 			: 0, 
				 		cr 			: value.amt*rate,
				 		class_id  	: invoice.class_id,
				 		memo 		: invoice.memo,
				 		exchange_rate: rate,
					 	main 		: 0	 		
					});
				});
			}
			
			//Witdraw to journal
			if(!jQuery.isEmptyObject(witdrawList)){
				//Deposit on Dr
				$.each(witdrawList, function(index, value){
					banhji.journalEntry.add({
						journal_id 	: 0,
				 		account 	: value.id,	 		
				 		dr 			: value.amt*rate, 
				 		cr 			: 0,
				 		class_id  	: invoice.class_id,
				 		memo 		: invoice.memo,
				 		exchange_rate: rate,
					 	main 		: 0	 		
					});
				});

				var wCash = 0;
				$.each(witdrawList, function(index, value){					
					wCash += value.amt;
				});

				//Cash on Cr							
				banhji.journalEntry.add({
					journal_id 	: 0,
			 		account 	: invoice.cash_account_id,	 		
			 		dr 			: 0, 
			 		cr 			: wCash*rate,
			 		class_id  	: invoice.class_id,
			 		memo 		: invoice.memo,
			 		exchange_rate: rate,
				 	main 		: 0	 		
				});				
			}
			//Calcualte customer deposit
			if(depositAmount>0){
				var deposit = kendo.parseFloat(customer.deposit_amount) + kendo.parseFloat(depositAmount);					
				customer.set("deposit_amount", deposit);
				banhji.ds.peopleDS.sync();
			}
			
			//Add journal to datasource
			banhji.transaction.addNew();
			var journal = banhji.transaction.get("current");
			
			journal.set("company_id", this.get("company_id"));
			journal.set("people_id", customer.id);
			journal.set("employee_id", banhji.config.userData.userId);				
			journal.set("transaction_type", "Invoice");				
			journal.set("memo", "វិក្កយបត្រ");
			journal.set("date", kendo.toString(new Date(invoice.issued_date), "yyyy-MM-dd"));				
			journal.set("voucher", null);
			journal.set("class_id", invoice.class_id);
			journal.set("status", 0);
			journal.set("reference", null); //invoice_id
			journal.set("vat_id", {id: null});
						 			 	
		 	banhji.transaction.save()
		 	.then(function(journal){			 		
	 			$.each(banhji.journalEntry.dataSource.data(), function(index, value){
	 				value.set("journal_id", journal.data.id);
	 			});
	 					 			
	 			banhji.journalEntry.save();
		 	});
		}			
	});		

	banhji.meter = kendo.observable({		
		customer 		: null,
		meter 			: null,
		current_company_id : null,
		utility_id 		: 1,
		company_id 		: 0,
		contact_id 		: 0,

		tariffList 		: [],
		exemptionList 	: [],
		maintenanceList : [],

		ampereList 		: [],
		phaseList 		: [],
		voltageList 	: [],
		parentMeterList : [],

		dataSource 		: dataStore(baseUrl + "meters/index"),
		meterDS  		: dataStore(baseUrl + "meters/index"),
		contactDS 		: dataStore(baseUrl + "contacts/index"),
		locationDS 		: dataStore(baseUrl + "meters/location"),		
		electricityBoxDS : dataStore(baseUrl + "electricity_boxes/index"),
		electricityUnitDS : dataStore(baseUrl + "electricity_units/index"),		
		itemDS 			: dataStore(baseUrl + "meters/item"),
		feeDS 			: dataStore(baseUrl + "fees/index"),
		statusList 		: [            
			{ "id": 1, "name": "កំពុងប្រើប្រាស់" },
			{ "id": 2, "name": "ផ្អាក់ប្រើប្រាស់" },
			{ "id": 0, "name": "ឈប់ប្រើប្រាស់" }
        ],		

		pageLoad 		: function(utility_id){	
			this.set("utility_id", utility_id);		
									
		},
		loadData 		: function(company_id){			
			if(this.get("current_company_id")!=company_id){
			 	this.set("current_company_id", company_id);

				this.locationDS.filter({ field:"company_id", value: company_id });
				
				this.itemDS.filter([
					{ field:"company_id", value: company_id },
					{ field:"main_id", value: 1 }
				]);

				this.loadFee(company_id);
				this.loadElectricityUnit(company_id);
			}						
		},				
		loadFee		 	: function(company_id){
			var self = this;
			
			this.set("tariffList", []);
			this.set("exemptionList", []);
			this.set("maintenanceList", []);

			this.feeDS.filter({ field:"company_id", value: company_id });
			this.feeDS.bind("requestEnd", function(e){
				var response = e.response.results;
				
				$.each(response, function(index, value){																						
					if(value.type=="tariff"){							
						self.tariffList.push({
							id 	: value.id,
							name: value.name 
						});
					}
					if(value.type=="exemption"){							
						self.exemptionList.push({
							id 	: value.id,
							name: value.name 
						});
					}
					if(value.type=="maintenance"){
						self.maintenanceList.push({
							id 	: value.id,
							name: value.name 
						});
					}								
				});
			});
		},
		loadElectricityUnit : function(company_id){
			var self = this;

			this.set("ampereList", []);
			this.set("phaseList", []);
			this.set("voltageList", []);
			
			this.electricityUnitDS.filter({ field:"company_id", value: company_id });
			this.electricityUnitDS.bind("requestEnd", function(e){
				var response = e.response.results;

				$.each(response, function(index, value){					
					if(value.type==="ampere"){
						self.ampereList.push({
							id 	: value.id,
							name: value.name 
						});
					}
					if(value.type==="phase"){
						self.phaseList.push({
							id 	: value.id,
							name: value.name 
						});
					}
					if(value.type==="voltage"){
						self.voltageList.push({
							id 	: value.id,
							name: value.name 
						});
					}									
				});
			});								
		},
		loadMeter 		: function(contact_id){
			var self = this;

			this.dataSource.filter({ field:"contact_id", value: contact_id });
			this.dataSource.bind("requestEnd", function(e){
				var response = e.response.results;
				
				$.each(response, function(index, value){																						
					if(value.reactive_of==0 && value.backup_of==0){							
						self.parentMeterList.push({
							id 	: value.id,
							name: value.number 
						});
					}										
				});
			});			
		},
		addEmpty		: function(){										      		
      		this.dataSource.add({
      			company_id 			: this.get("company_id"),
      			utility_id 			: 1,
      			location_id 		: 0,
      			electricity_box_id 	: 0,
      			contact_id 			: this.get("contact_id"),
      			item_id 			: 0,
      			reactive_of 		: 0,
				backup_of 			: 0,
				number 				: "",
				multiplier			: 1,
				max_number			: 10000,
				ear_sealed			: true,
				cover_sealed		: true,				
				memo				: "",	
				status				: 1,
				date_used 			: new Date(),

				item_name 			: "",
				electricity_box_number : "",
				
				amperes 			: {id:0},				
				phases 				: {id:0},				
				voltages 			: {id:0},
				
				tariffs 			: {id:0},				
				exemptions 			: {id:0},								
				maintenances 		: {id:0}
			});

			var data = this.dataSource.data();
			var obj = data[data.length - 1];
      						
			this.set("meter", obj);			
      	},
      	openMeterWindow	: function(){
      		this.addEmpty();

         	var window = $("#meter-window").data("kendoWindow");
          	window.title("កុងទ័រ");          	
          	window.center().open();         	
      	},
      	closeMeterWindow: function(){	      		
      		this.dataSource.cancelChanges();
      		var window = $("#meter-window").data("kendoWindow");          	         	
          	window.close();          	
      	},
      	edit 			: function(e){
      		var data = e.data;
      		
      		this.set("meter", data);      		    		

      		var window = $("#meter-window").data("kendoWindow");
          	window.title("កុងទ័រ");          	
          	window.center().open();
      	},
      	save 			: function(){
      		var self = this;

      		this.dataSource.sync();
      		var saved = false;
      		this.dataSource.bind("requestEnd", function(e){
      			if(saved==false){
					saved = true;

	      			self.set("meter", null);

	      			var window = $("#meter-window").data("kendoWindow");          	         	
	          		window.close();
          		}
      		});
      	},      	
      	delete 			: function(e){
			if (confirm("តើលោកអ្នកពិតជាចង់លុបមែនឬទេ?")) {        
		        var data = e.data;
		        this.dataSource.remove(data);
		        this.dataSource.sync();
	    	}	    	
	    }
	});
	banhji.reading = kendo.observable({		
		monthOfSearch 	: null,
		company_id 		: null,
		location_id 	: null,
		meter_id 		: null,
		utility_id 		: 1,
				
		month_of 		: new Date(),
		from_date		: new Date(),
		to_date			: new Date(),
		read_by 		: null,		
						
		dataSource 		: new kendo.data.DataSource({
			transport: {
				read: {
					url: baseUrl + "meters/reading",
					headers: {
						"Entity": getDB()
					},
					type: "GET",
					dataType: "json"
				}			  	
			},						
			pageSize: 100,							  	
		  	schema: {
				model: {
					id: "id"
				},
				data: "results",
				total: "count"	
			}
		}),
		readerDS 		: dataStore(baseUrl + "contacts/employee"),
		companyDS 		: dataStore(baseUrl + "contacts/company"),
		locationDS 		: dataStore(baseUrl + "meters/location"),
		
		meterDS			: dataStore(baseUrl + "meters/index"),
		meterRecordDS	: dataStore(baseUrl + "meters/reading"),
		
		pageLoad 		: function(utility_id, meter_id){				
			this.set("utility_id", utility_id);

		},
		strMonthOf 		: function(){
			return "អំនានប្រចាំខែ " + kendo.toString(this.get("monthOfSearch"), "MM-yyyy");
		},		
		search 			: function(){								
			var monthOfSearch = this.get("monthOfSearch");			
			var location_id = this.get("location_id");
			var meter_id = this.get("meter_id");
			var para = Array();
		
			if(monthOfSearch){				
				if(location_id || meter_id){						
					var monthOf = new Date(monthOfSearch);
					monthOf.setDate(1);
					monthOf = kendo.toString(monthOf, "yyyy-MM-dd");
					para.push({ month_of: monthOf });				
					
					this.dataSource.transport.options.read.data={
						month_of: monthOf,
						location_id: location_id,
						meter_id: meter_id
					};
					this.dataSource.read();	
				}
			}		
		},						
		isSupported 	: function() {
			// check if File API is supported in this browser
			if(window.File && window.FileReader && window.FileList && window.Blob) {
				return true;
			} else {
				return false;
			}
		},			
		readFile 		: function(e){
			e.preventDefault();
			var self = this;

			var reader = new FileReader();					
			if(this.get("isSupported")) {
				var file = document.getElementById('myFile').files[0];
				// var file = $('#myFile').get(0).files[0];

				if(file !== undefined) {
					this.set("uploadStatus", "");
					reader.readAsText(file);
					
					reader.onload = function() {						
 						var result = reader.result.split('\r');	 						
 						
						// for (var i = 1; i < result.length; i ++) {								
						// 	var data = result[i].split(',');
						// 	readingList.push(data);															
						// }

						self.dataSource.transport.options.read.data = result;
						self.dataSource.read();																		
					}

					reader.onerror = function() {							
						this.set("uploadStatus", reader.error);
					}						
				} else {
					this.set("uploadStatus", "សូមជ្រើសរើសឯកសា!");
				}

			} else {
				this.set("uploadStatus", "ឯកសារេនះពុំត្រឹមត្រូវទេ!");					
			}
		},				
      	onChange 		: function(e) {
      		e.preventDefault();

      		var self = this;
      		var selected = e.data;            
            
            if(kendo.parseInt(selected.current)>0){        
		        var add_up = 0;
		        if(selected.new_round){
		        	add_up = kendo.parseInt(selected.max_number);            	
	        	}
	        	var usage = ((kendo.parseInt(selected.current) + add_up) - kendo.parseInt(selected.previous))*selected.multiplier;
	            selected.set("usage", usage);
	            
	            if(usage<0){
					selected.set("isValid", false);
				}else{
					selected.set("isValid", true);
				}
			}else{
				selected.set("usage", "");
				selected.set("isValid", true);
			}

			var nextID = selected.index+1;
			$(".txt"+nextID).focus();            
        },
        companyChanges	: function(e){
        	e.preventDefault();        	
        	this.set("location_id", null);        	
        },
        total 			: function() {      		
	        var sum = 0;

	        $.each(this.dataSource.data(), function(index, value) {	        		            
	        	sum += kendo.parseInt(value.usage);		        	          
	        });

	        return kendo.toString(sum, "n0");
	    },
	    checkInput 		: function() {	        
	        var isValid = true;
	        var hasReading = false;

	        $.each(this.dataSource.data(), function(index, value) {
	        	if(value.current>0){
	        		hasReading = true;
	        	}

	        	if(value.isValid==false){
	        		isValid = false;
	        	}		        	          
	        });

	        if(hasReading==false){
	        	isValid = false;
	        }

	        return isValid;
	    },             	
      	save 			: function(){
      		var self = this;	      		     			
  			var monthOf = new Date(this.get("month_of"));
			monthOf.setDate(1);
			monthOf = kendo.toString(monthOf, "yyyy-MM-dd");

			$.each(this.dataSource.data(), function(index, value){
				if(kendo.parseInt(value.current)>0){
					self.meterRecordDS.add({				
						meter_id	: value.id,
						read_by 	: self.get("read_by"),
						input_by 	: 0,						
					   	previous	: value.previous,
					   	current 	: value.current,					   	
					   	new_round	: value.new_round,
					   	usage 		: value.usage,					   	
					   	month_of 	: monthOf,
					   	from_date	: kendo.toString(self.get("from_date"), "yyyy-MM-dd"),						   
					   	to_date 	: kendo.toString(self.get("to_date"), "yyyy-MM-dd")
					});
				}
			});

			this.meterRecordDS.sync();
			var saved = false;				
			this.meterRecordDS.bind("requestEnd", function(e){				
				if(saved==false){
					saved = true;

					self.meterRecordDS.data([]);
					self.dataSource.data([]);
				}
			});      			
      	}      			
	});
	banhji.uInvoice = kendo.observable({		
		chkAll 			: false,		
		monthOfSearch 	: null,
		company_id 		: null,
		location_id 	: null,
		utility_id		: 1,
		biller 			: auth.getLogin() === null ? '':auth.getLogin().id,
				
		issued_date		: new Date(),
		payment_date 	: new Date(),
		due_date 		: new Date(),	
		month_of 		: new Date(),
		monthOfSearch 	: new Date(),

		dataSource  	: dataStore(baseUrl + "invoices/index"),
		meterDS  		: dataStore(baseUrl + "meters/index"),		
		companyDS 		: dataStore(baseUrl + "contacts/company"),
		locationDS 		: dataStore(baseUrl + "meters/location"),		
		tariffItemDS 	: dataStore(baseUrl + "meters/tariff_item"),		
		readingDS 		: new kendo.data.DataSource({
			transport: {
				read: {
					url: baseUrl + "meters/reading_for_invoice",
					headers: {
						"Entity": getDB()
					},
					type: "GET",
					dataType: "json"
				}			  	
			},						
			pageSize: 100,							  	
		  	schema: {
				model: {
					id: "id"
				},
				data: "results",
				total: "count"	
			}		  			
		}),
		
		pageLoad 		: function(utility_id){
			this.set("utility_id", utility_id);

			this.tariffItemDS.read();
		},		
		search 			: function(){
			var monthOfSearch = this.get("monthOfSearch");			
			var location_id = this.get("location_id");
			var meter_id = this.get("meter_id");
			var para = Array();
		
			if(monthOfSearch){
				if(location_id || meter_id){						
					var monthOf = new Date(monthOfSearch);
					monthOf.setDate(1);
					monthOf = kendo.toString(monthOf, "yyyy-MM-dd");
					para.push({ month_of: monthOf });				
					
					this.readingDS.transport.options.read.data={
						month_of: monthOf,
						location_id: location_id,
						meter_id: meter_id
					};
					this.readingDS.read();	
				}
			}
		},	
		checkAll 		: function(e){
			e.preventDefault();

			var bolValue = this.get("chkAll");
			var data = this.readingDS.data();
			
			if(data.length>0){						
		        $.each(data, function(index, value){		        			        	
		        	value.set("isCheck", bolValue);		        	
		        });		        			        
	        }							
		},		
		companyChanges 	: function(e){				
        	e.preventDefault();
        	this.set("location_id", null);
        },
        total 			: function(){      		
	        var sum = 0;

	        $.each(this.readingDS.data(), function(index, value) {	        		            
	        	sum += kendo.parseInt(value.usage);		        	          
	        });

	        return kendo.toString(sum, "n0");
	    },	 
		save 	 		: function(){
			var self = this;
			var monthOf = new Date(this.get("month_of"));
			monthOf.setDate(1);
			monthOf = kendo.toString(monthOf, "yyyy-MM-dd");

			var data = this.readingDS.data();

			var invoiceType = "eInvoice";
			if(this.get("utility_id")==2){
				invoiceType = "wInvoice";
			}			
			//Get unique contact_id
			var uniqueCustomerID = [];
			$.each(data, function(index, value){
				if(value.isCheck){				
			    	if($.inArray(value.customers.id, uniqueCustomerID) === -1) uniqueCustomerID.push(value.customers.id);
			    }				
			});			
			
			for (var i=0;i<uniqueCustomerID.length;i++) {
				var invoiceLineList = [];
				var amount = 0, rate = 1, locale = "km-KH", company_id = 0, location_id = 0;

				//Calculation
				$.each(data, function(indexmr, mr){															
					if(mr.customers.id==uniqueCustomerID[i]){						
						var usage = kendo.parseInt(mr.usage);
						var current_amount = 0;

						var company_rate = self.companyDS.get(mr.customers.company_id).rate;						
						rate = kendo.parseFloat(company_rate)/kendo.parseFloat(mr.customers.rate);
						locale = mr.customers.locale;
						company_id = mr.customers.company_id;
						location_id = mr.meters.location_id;
						
						//Exemption as usage						
						if(mr.exemptions.length>0){							
							if(mr.exemptions[0].unit=="usage"){
								var exemptionUsage = kendo.parseFloat(mr.exemptions[0].amount);
								if(usage>exemptionUsage){
									usage -= exemptionUsage;
								}else{
									usage = 0;
								}

								invoiceLineList.push({				
							   		"invoice_id"		: 0,
									"item_id" 			: 0,															
								   	"meter_record_id"	: 0,
								   	"description" 		: mr.exemptions[0].name,					   	
								   	"unit" 				: mr.exemptions[0].amount,
								   	"price"				: 0,					   	
								   	"amount" 			: 0,
								   	"rate"				: rate,
								   	"locale" 			: locale,
								   	"has_vat" 			: false
								});
							}					
						}
						
						//Tariff						
						if(mr.tariffs.length>0){							
							$.each(self.tariffItemDS.data(), function(indext, tariff){
								var tariffUsage = kendo.parseFloat(tariff.usage);						
								var tamount = 0;
								
								if(kendo.parseInt(tariff.fee_id)==mr.tariffs[0].id){
									if(tariff.is_flat){								
										tamount = kendo.parseFloat(tariff.price);																																																																																
									}else{								
										tamount = usage * kendo.parseFloat(tariff.price);																						
									}

									invoiceLineList.push({				
								   		"invoice_id"		: 0,
										"item_id" 			: 0,																
									   	"meter_record_id"	: mr.id,
									   	"description" 		: mr.tariffs[0].name,					   	
									   	"unit" 				: usage,
									   	"price"				: tariff.price,					   	
									   	"amount" 			: tamount*rate,
									   	"rate"				: rate,
									   	"locale" 			: locale,
									   	"has_vat" 			: false
									});

									current_amount += tamount;				

									return false;						
								}
							});					
						}
						
						//Exemption as money and $
						if(mr.exemptions.length>0){											
							if(mr.exemptions[0].unit=="money"){												
								invoiceLineList.push({				
							   		"invoice_id"		: 0,
									"item_id" 			: 0,															
								   	"meter_record_id"	: 0,
								   	"description" 		: mr.exemptions[0].name,					   	
								   	"unit" 				: 1,
								   	"price"				: mr.exemptions[0].amount,					   	
								   	"amount" 			: mr.exemptions[0].amount*rate,
								   	"rate"				: rate,
								   	"locale" 			: locale,
								   	"has_vat" 			: false
								});

								if(current_amount>kendo.parseFloat(mr.exemptions[0].amount)){
									current_amount -=  kendo.parseFloat(mr.exemptions[0].amount);
								}else{
									current_amount = 0;
								}						
							}

							if(mr.exemptions[0].unit=="%"){
								var exemptionPercent = amount / kendo.parseFloat(mr.exemptions[0].amount);
								invoiceLineList.push({				
							   		"invoice_id"		: 0,
									"item_id" 			: 0,													
								   	"meter_record_id"	: 0,
								   	"description" 		: mr.exemptions[0].name,					   	
								   	"unit" 				: 1,
								   	"price"				: mr.exemptions[0].amount,					   	
								   	"amount" 			: exemptionPercent*rate,
								   	"rate"				: rate,
								   	"locale" 			: locale,
								   	"has_vat" 			: false
								});
							}
						}

						amount += current_amount;
					}					
				});				

				//Add invoice
				this.dataSource.add({				
			   		"company_id"	: company_id,
			   		"contact_id"	: uniqueCustomerID[i],
			   		"location_id" 	: location_id,					
					"biller" 		: this.get("biller"),					
					"number" 		: "",											
				   	"type"			: invoiceType,
				   	"amount" 		: amount*rate,
				   	"vat" 			: 0,					   	
				   	"rate" 			: rate,
				   	"locale" 		: locale,
				   	"month_of" 		: monthOf,
				   	"issued_date"	: kendo.toString(this.get("issued_date"), "yyyy-MM-dd"),					   	
				   	"payment_date" 	: kendo.toString(this.get("payment_date"), "yyyy-MM-dd"),
				   	"due_date" 		: kendo.toString(this.get("due_date"), "yyyy-MM-dd"),
				   	"check_no" 		: "",
				   	"memo" 			: "",
				   	"memo2" 		: "",
				   	"status" 		: 0,

				   	"invoice_lines" : invoiceLineList
				});
			}

			var saved = false;			
			this.dataSource.sync();
			this.dataSource.bind("requestEnd", function(e){
				if(saved==false){
					saved = true;
					
					self.readingDS.read();
				}
			});
		}	
	});	
	banhji.uInvoicePrint = kendo.observable({
		monthOfSearch 	: new Date("2014-12-01"),
		company_id 		: 1,
		location_id 	: 1,
		utility_id		: 1,
		invoice_id 		: null,	
		isVisible 		: true,		
				
		dataSource 	 	: dataStore(baseUrl + "invoices/print"),
		invoiceDS 	 	: dataStore(baseUrl + "invoices/index"),
		companyDS 		: dataStore(baseUrl + "contacts/company"),
		locationDS 		: dataStore(baseUrl + "meters/location"),
				
		pageLoad 		: function(utility_id, id){
			this.set("utility_id", utility_id);			
								
		},
		search 			: function(){
			var self = this;

			var monthOfSearch = this.get("monthOfSearch");			
			var location_id = this.get("location_id");
								
			if(monthOfSearch && location_id){								
				var monthOf = new Date(monthOfSearch);
				monthOf.setDate(1);
				monthOf = kendo.toString(monthOf, "yyyy-MM-dd");
												
				this.dataSource.query({
					filter: [
						{ field:"month_of", value: monthOf },
						{ field:"location_id", value: location_id }
					],
					page: 1,
					pageSize: 5
				}).then(function(e){
					self.barcod();
				});				
			}											
		},
		companyChanges 	: function(e){				
        	e.preventDefault();
        	this.set("location_id", null);
        },	
		barcod 			: function(){									
			var view = this.dataSource.view();
			
			for (var i=0;i<view.length;i++) {
				var d = view[i];
												
				$("."+d.number).kendoBarcode({
					renderAs: "svg",
				  	value: d.customers.number,
				  	type: "code128",
				  	width: 200,
					height: 40,
					text:{
					    visible: false
					}	
				});
			}		
		},		
		print 			: function(e) {
			var printBtn = e.target;
			if(printBtn.checked) {
				$(".hiddenPrint").css("visibility", "hidden");
			} else {
				$(".hiddenPrint").css("visibility", "visible");
			}
		}
	});

	banhji.cashier = kendo.observable({
		customer 			: null,		
		total_customer 		: 0,
		total_payment 		: kendo.toString(0,"c0", "km-KH"),

		//Payment		
		payment_date		: new Date(),
		payment_method_id	: 2,
		cash_account_id 	: 2,
		check_no			: "",		
		cashier				: auth.getLogin() === null ? '':auth.getLogin().id,
		discount 			: 0,
		fine 				: 0,							
		pay_amount  		: kendo.toString(0,"c0", "km-KH"),
		receive_amount  	: kendo.toString(0,"c0", "km-KH"),
		remain				: kendo.toString(0,"c0", "km-KH"),

		invoiceList 		: [],
		
		dataSource 			: dataStore(baseUrl + "payments/index"),
		paymentByCashierDS	: dataStore(baseUrl + "payments/by_cashier"),		
		contactDS 			: dataStore(baseUrl + "contacts/index"),				
		invoiceDS 			: dataStore(baseUrl + "invoices/index"),
		transactionDS 		: dataStore(baseUrl + "invoices/index"),
		paymentMethodDS 	: dataStore(baseUrl + "invoices/payment_method"),			
		
		pageLoad 			: function(invoice_id){
			this.loadPaymentByCashier();
		},
		total 				: function() {      		
	        var sum = 0;

	        $.each(this.invoiceList, function(index, value) {	        		            
	        	sum += kendo.parseInt(value.amount);		        	          
	        });

	        return kendo.toString(sum, "c0", "km-KH");
	    },
		closeX 				: function(){				
			kendo.fx($("#slide-form")).slideIn("up").play();							
			window.history.go(-1);
		},
		loadPaymentByCashier: function(){
			var self = this;

			this.paymentByCashierDS.query({
				filter: [
					{ field:"cashier", value: this.get("cashier") },
					{ field:"payment_date", value: kendo.toString(new Date(), "yyyy-MM-dd") }
				]
			}).then(function(e){
				var view = self.paymentByCashierDS.view();
						    	
		    	self.set("total_customer", view[0].total_customer);
		    	self.set("total_payment", kendo.toString(view[0].amount, "c0", "km-KH"));
			});
		},		
		loadInvoice 		: function(contact_id, fullIdName){
			var self = this;

			this.invoiceDS.query({
				filter: [
					{ field:"id", operator:"where_related", table:"contact", value: contact_id },
		    		{ field:"status", value: 0 }
				],
				page: 1,
				pageSize: 50	  	
			}).then(function(e) {
			    var view = self.invoiceDS.view();
			    
			    $.each(view, function(index, value){
		    		var result = $.grep(self.get("invoiceList"), function(e){ return e.id == value.id; });

		    		if (result.length == 0) {
					  	// not found
					  	self.get("invoiceList").push({				
							id 				: value.id,
							isPay 			: true,				
							issued_date 	: value.issued_date,
							fullname 		: fullIdName,							
							number			: value.number,				
							amount 			: kendo.parseFloat(value.amount),
							pay_amount 		: kendo.parseFloat(value.amount),
							rate 			: value.rate,
							locale 			: value.locale,
							contact_id 		: value.contacts[0].id,
							company_id 		: value.companies[0].id
 						});
						self.change();
						self.autoIncreaseNo();
					} else if (result.length == 1) {
					  	// access the foo property using result[0].foo					  
					} else {
					  	// multiple items found					  
					}		    					    		
		    	});		    	
			});			
		},						
		autoIncreaseNo 		: function(){
			$(".sno").each(function(index,element){                 
			   $(element).text(index + 1); 
			});
		},
		change				: function(){		
			var total = 0;		
		    var tpay = 0;
		    $.each(this.get("invoiceList"), function(index, value){
		    	total += kendo.parseFloat(value.amount)*kendo.parseFloat(value.rate);
		    	tpay += kendo.parseFloat(value.pay_amount)*kendo.parseFloat(value.rate);
		    });

		    this.set("pay_amount", kendo.toString(tpay, "c0", "km-KH"));		  	   	    	
	    	
	    	var receive_amount = tpay + kendo.parseFloat(this.get("fine"));
			this.set("receive_amount", kendo.toString(receive_amount, "c0", "km-KH"));
	    	
	    	var remain = (total + kendo.parseFloat(this.get("fine"))) - (tpay + kendo.parseFloat(this.get("discount")));
	    	this.set("remain", kendo.toString(remain, "c0", "km-KH"));	    	   	
		},	
		remove 				: function(e){
			if (confirm("តើលោកអ្នកពិតជាចង់លុបមែនឬទេ?")) {        
		        var item = e.data;
		        var index = this.get("invoiceList").indexOf(item);        
		        this.get("invoiceList").splice(index, 1);
		        this.change();
		        this.autoIncreaseNo();
	    	}	    	
	    },
	    checkPay 			: function(e){
	    	e.preventDefault();

	    	var d = e.data;
	    	var target = e.currentTarget;

	    	if(target.checked){
	    		d.set("pay_amount", d.amount);
	    	}else{
	    		d.set("pay_amount", 0);
	    	}
	    	this.change();
	    },
		save 		 		: function(){
			var self = this;

			var data = this.get("invoiceList");
			if(data.length>0){
				$.each(data, function(index, value){
					if(kendo.parseFloat(value.pay_amount)>0){
						self.dataSource.add({							
							reference_id: value.id,
							company_id 	: value.company_id,							
							cashier 	: self.get("cashier"),
							contact_id 	: value.contact_id,
							type 		: "invoice",
							amount 		: value.pay_amount,
							fine 		: self.get("fine"),
							discount 	: self.get("discount"),
							rate 		: value.rate,
							locale 		: value.locale,
							payment_date: kendo.toString(self.get("payment_date"), "yyyy-MM-dd")
						});
					}
				});

				this.dataSource.sync();
				var saved = false;
				this.dataSource.bind("requestEnd", function(e){
					if(saved==false){
						saved = true;

						self.clear();
						self.loadPaymentByCashier();
					}
				});
			}

		},			
		clear 				: function() {
			this.set("check_no", "");			
			this.set("discount", 0);
			this.set("fine", 0);		
			this.set("pay_amount", kendo.toString(0,"c0", "km-KH"));
			this.set("receive_amount", kendo.toString(0,"c0", "km-KH"));
			this.set("remain", kendo.toString(0,"c0", "km-KH"));

			this.set("invoiceList", []);							
		}
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
	//END OF DAWINE  ---------------------------------------------------------------------------------	
	<!-- views and layout -->
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
		structure 	: new kendo.View('#admin-structure-tmpl', {model: banhji.structure}),
		structureNew: new kendo.View('#admin-structure-new-tmpl', {model: banhji.structure}),
		structureSingle: new kendo.View('#admin-structure-single-tmpl', {model: banhji.structure}),
		vendors 	: new kendo.Layout("#vendors-tmpl", {model: banhji.vendors}),
		vendorNew 		: new kendo.Layout("#vendor-new-tmpl", {model: banhji.vendors}),
		vendorDash 	: new kendo.Layout("#vendor-dashboard-tmpl", {model: banhji.vendors}),
		vendor 		: new kendo.Layout("#vendor-tmpl", {model: banhji.vendors}),
		vendorBill 	: new kendo.View("#bill-list-container-tmpl", {model: banhji.bill}),
		vendorList 	: new kendo.View("#vendors-list-tmpl", {model: banhji.vendors}),
		vendorDetail: new kendo.View("#vendor-detail-tmpl", {model:banhji.vendors}),
		// vendorList 	: new kendo.View("#accounts-list-tmpl", {model: banhji.account}),
		payment 	: new kendo.View("#payment-tmpl", {model: banhji.payment}),
		// billForm 	: new kendo.Layout("#vendors-bill-form-header-tmpl", {model: banhji.expense}),
		billExp 	: new kendo.View("#vendors-expense-form-header-tmpl", {model: banhji.expense}),
		billPur 	: new kendo.View("#vendors-purchase-form-header-tmpl", {model: banhji.purchase}),
		accountDash : new kendo.Layout("#accounting-dashboard-tmpl", {model: banhji.accounting}),
		// companyL:new kendo.Layout("#company", {model: admin}),
		// companyList: new kendo.View("#companyList"),
		// comNew: new kendo.View("#companyNew", {model: company}),
		// myPage: new kendo.Layout("#myId", {model: admin})
		//DAWINE -----------------------------------------------------------------------------------------
		customerCenter: new kendo.Layout("#customerCenter", {model: banhji.customerCenter}),
		customerDashboard: new kendo.Layout("#customerDashboard", {model: banhji.customerCenter}),
		customer: new kendo.Layout("#customer", {model: banhji.customer}),
		
		invoice: new kendo.Layout("#invoice", {model: banhji.invoice}),
		receipt: new kendo.Layout("#receipt", {model: banhji.invoice}),
		estimate: new kendo.Layout("#estimate", {model: banhji.invoice}),
		so: new kendo.Layout("#so", {model: banhji.invoice}),
		gdn: new kendo.Layout("#gdn", {model: banhji.invoice}),
		
		eMeter: new kendo.Layout("#eMeter", {model: banhji.meter}),
		reading: new kendo.Layout("#reading", {model: banhji.reading}),
		uInvoice: new kendo.Layout("#uInvoice", {model: banhji.uInvoice}),
		uInvoicePrint: new kendo.Layout("#uInvoicePrint", {model: banhji.uInvoicePrint}),
		cashier: new kendo.Layout("#cashier", {model: banhji.cashier}),

		customerList: new kendo.Layout("#customerList"),
		paymentSummary: new kendo.Layout("#paymentSummary"),
		paymentDetail: new kendo.Layout("#paymentDetail"),

		rInvoicePrint: new kendo.Layout("#rInvoicePrint", {model: banhji.rInvoicePrint}),

		printDefaultTemplate: new kendo.Layout("#printDefaultTemplate"),
		//END OF DAWINE  ---------------------------------------------------------------------------------
	};
	<!-- views and layout-->
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

	banhji.router.route('/structure', function() {
		// show structure list
		if(!auth.getLogin()) {
			banhji.router.navigate('/login');
		} else {
			banhji.view.layout.showIn('#content', banhji.view.adTmpl);
			banhji.view.adTmpl.showIn('#myContainer', banhji.view.structure);
		}
	});
	banhji.router.route('/structure/new', function() {
		// create new structure
		if(!auth.getLogin()) {
			banhji.router.navigate('/login');
		} else {
			banhji.structure.dataStore.insert(0, {
				code: "",
				description: "",
				segments: [],
				created_at: '',
				updated_at: ''
			});
			banhji.structure.setCurrent(banhji.structure.dataStore.at(0));
			banhji.view.layout.showIn('#content', banhji.view.adTmpl);
			banhji.view.adTmpl.showIn('#myContainer', banhji.view.structureNew);
		}
	});
	banhji.router.route('/structure/:id', function(id) {
		// view edit, or delete given structure with id
		if(!auth.getLogin()) {
			banhji.router.navigate('/login');
		} else {
			if(banhji.structure.dataStore.get(id)) {
				banhji.structure.setCurrent(banhji.structure.dataStore.get(id));
			} else {
				banhji.structure.find({field: 'id', value: id});
			}
			banhji.view.layout.showIn('#content', banhji.view.adTmpl);
			banhji.view.adTmpl.showIn('#myContainer', banhji.view.structureSingle);
		}
	});
	banhji.router.route('/structure/:id/segments', function(id){
		// add or remove segments from structure with given structure id
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

	banhji.router.route('/currencies/u/list', function(){
		console.log('currency list');
	});

	// vendor section
	banhji.router.route('/vendors', function(){
		if(!auth.getLogin()) {
			banhji.router.navigate('/login');
		} else {
			banhji.vendors.billVM.getOpenBills();
			banhji.view.layout.showIn('#menu', banhji.view.menu);
			banhji.view.layout.showIn('#content', banhji.view.vendors);
			banhji.view.vendors.showIn("#displayPane", banhji.view.vendorDash);
		}
	});

	banhji.router.route('/vendors/:id', function(id){
		if(!auth.getLogin()) {
			banhji.router.navigate('/login');
		} else {
			banhji.view.layout.showIn('#menu', banhji.view.menu);
			banhji.view.layout.showIn('#content', banhji.view.vendors);
			banhji.view.vendors.showIn("#displayPane", banhji.view.vendor);
			// banhji.view.vendor.showIn("#vendor-container-tmpl", banhji.view.vendorDetail);
			
			banhji.vendors.get('vendorPhones').query({
				filter: {field: 'contact_id', value: id},
				skip: 0,
				pageSize: 100
			}).done(function(){
				// var data = banhji.vendors.get('vendorPhones').data();
				// if(data.length === 0) {
				// 	banhji.vendors.get('vendorPhones').data([]);
				// }
			});
			// banhji.view.vendor.showIn("#vendorDetailHolder", banhji.view.vendorBill);
		}
	});

	banhji.router.route('/vendors/u/new', function() {
		if(!auth.getLogin()) {
			banhji.router.navigate('/login');
		} else {
			banhji.vendors.accountDS.get("dataStore").filter({field: 'account_type_id', operator: 'where_in', value: [8, 11, 16]});
			banhji.currency.getEnabled();
			banhji.vendors.set('isEdit', false);
			banhji.vendors.addNew();
			banhji.vendors.setCurrent(banhji.vendors.get('dataSource').at(0));
			banhji.view.layout.showIn('#menu', banhji.view.blank);
			banhji.view.layout.showIn('#content', banhji.view.vendorNew);
		}
	});

	banhji.router.route('/vendors/:id/edit', function(id) {
		if(!auth.getLogin()) {
			banhji.router.navigate('/login');
		} else {
			banhji.vendors.accountDS.get("dataStore").filter({field: 'account_type_id', operator: 'where_in', value: [8, 11, 16]});
			banhji.currency.getEnabled();
			banhji.vendors.selectPaymentOption();
			banhji.vendors.set('isEdit', true);
			banhji.view.layout.showIn('#menu', banhji.view.blank);
			banhji.view.layout.showIn('#content', banhji.view.vendorNew);
		}
	});

	banhji.router.route('/vendors/u/list',  function(){
		banhji.view.layout.showIn('#menu', banhji.view.blank);
			banhji.view.layout.showIn('#content', banhji.view.vendorList);
			$("#vendorListView").kendoListView({
				dataSource: banhji.vendors.dataSource,
				template: "<div>#:company#</div>",
				selectable: true,
				change: function() {
					var selected = this.select();
					var model = this.dataItem(selected);
					banhji.vendors.setCurrent(model);
				}
			});
	});

	banhji.router.route('/bills/purchase/new', function(){
		if(!auth.getLogin()) {
			banhji.router.navigate('/login');
		} else {
			banhji.purchase.itemList();
			banhji.billForm.addNew();
			banhji.billForm.get('current').set('type', 'purchase');
			banhji.billForm.getAccount();
			banhji.view.layout.showIn('#content', banhji.view.billPur);
			banhji.purchase.addItem();
			banhji.purchase.addItem();
			// banhji.view.billForm.showIn("#bill-form-list-container", banhji.view.billExp);
		}
	});

	banhji.router.route('/bills/purchase/:id', function(id){
		if(!auth.getLogin()) {
			banhji.router.navigate('/login');
		} else {
			banhji.billForm.getById(id);
			banhji.billForm.getAccount();
			banhji.view.layout.showIn('#content', banhji.view.billPur);
			// banhji.view.billForm.showIn("#bill-form-list-container", banhji.view.billExp);
		}
	});

	banhji.router.route('/bills/expense/new', function(){
		if(!auth.getLogin()) {
			banhji.router.navigate('/login');
		} else {
			banhji.billForm.addNew();
			banhji.billForm.get('current').set('type', 'expense');
			banhji.billForm.getAccount();
			banhji.view.layout.showIn('#content', banhji.view.billExp);
			banhji.expense.addItem();
			banhji.expense.addItem();
		}
	});

	banhji.router.route('/bills/expense/:id', function(id){
		if(!auth.getLogin()) {
			banhji.router.navigate('/login');
		} else {
			banhji.billForm.getById(id);
			banhji.billForm.getAccount();
			banhji.view.layout.showIn('#content', banhji.view.billExp);
		}
	});

	banhji.router.route('/vendors/u/po', function(){
		// instantiate ViewModel
		// itemDS = new kendo.data.DataSource({
		// 	offlineStorage: "banhji-po",
		// 	transport: {
		// 		read: {
		// 			url: baseUrl + 'items',
		// 			type: "GET",
		// 			dataType: "json"
		// 		},
		// 		create: {
		// 			url: baseUrl + 'items',
		// 			type: "POST",
		// 			dataType: "json"
		// 		},
		// 		update: {
		// 			url: baseUrl + 'items',
		// 			type: "PUT",
		// 			dataType: "json"
		// 		},
		// 		destroy: {
		// 			url: baseUrl + 'items',
		// 			type: "DELETE",
		// 			dataType: "json"
		// 		},
		// 		parameterMap: function(options, operation) {
		// 			if(operation === 'read') {
		// 				return {
		// 					limit: options.take,
		// 					page: options.page,
		// 					filter: options.filter
		// 				};
		// 			} else {
		// 				return {models: kendo.stringify(options.models)};
		// 			}
		// 		}
		// 	},
		// 	schema 	: {
		// 		model: {
		// 			id: 'id'
		// 		},
		// 		data: 'results',
		// 		total: 'count'
		// 	},
		// 	batch: true,
		// 	serverFiltering: true,
		// 	serverPaging: true,
		// 	pageSize: 100
		// });
		// itemVM = kendo.observable({
		// 	ds   	: dataStore(baseUrl + "billitems"),
		// 	add 		: function() {
		// 		var number = this.ds.data().length + 1;
		// 		this.ds.add({
		// 			number: number,
		// 			amount: 0.00,
		// 			rate: 0.00,
		// 			unit: 0.00,
		// 			item: null,
		// 			isTaxed: false,
		// 			bill: banhji.vm.get('current') ? banhji.vm.get('current') : null
		// 		});
		// 	},
		// 	remove 		: function(e) {
		// 		this.ds.remove(e.data);
		// 	},
		// 	computeAmount: function(e) {
		// 		e.data.set('amount', kendo.parseFloat(e.data.unit) * kendo.parseFloat(e.data.rate));
		// 		banhji.vm.total();
		// 	},
		// 	getTax 		: function(e) {
		// 		banhji.vm.getTax();
		// 	},
		// 	save 		: function() {
		// 		var dfd = $.Deferred();
		// 		this.ds.sync();
		// 		this.ds.bind("requestEnd", function(e){
		// 			if(e.response.results) {
		// 				dfd.resolve({type: e.type, data: e.response.results});
		// 			} else {
		// 				dfd.reject({error: e.type + " can not be processed."});
		// 			}
		// 		});
		// 		return dfd.promise();
		// 	}
		// });
		// vm = kendo.observable({
		// 	ds        : new kendo.data.DataSource({
		// 		offlineStorage: "banhji-po",
		// 		transport: {
		// 			read: {
		// 				url: baseUrl + 'bills',
		// 				type: "GET",
		// 				dataType: "json"
		// 			},
		// 			create: {
		// 				url: baseUrl + 'bills',
		// 				type: "POST",
		// 				dataType: "json"
		// 			},
		// 			update: {
		// 				url: baseUrl + 'bills',
		// 				type: "PUT",
		// 				dataType: "json"
		// 			},
		// 			destroy: {
		// 				url: baseUrl + 'bills',
		// 				type: "DELETE",
		// 				dataType: "json"
		// 			},
		// 			parameterMap: function(options, operation) {
		// 				if(operation === 'read') {
		// 					return {
		// 						limit: options.take,
		// 						page: options.page,
		// 						filter: options.filter
		// 					};
		// 				} else {
		// 					return {models: kendo.stringify(options.models)};
		// 				}
		// 			}
		// 		},
		// 		schema 	: {
		// 			model: {
		// 				id: 'id'
		// 			},
		// 			data: 'results',
		// 			total: 'count'
		// 		},
		// 		batch: true,
		// 		serverFiltering: true,
		// 		serverPaging: true,
		// 		pageSize: 100
		// 	}),
		// 	close     : function() {
		// 		window.history.back(-1);
		// 		this.form.ds.cancelChanges();
		// 		this.itemDS.ds.cancelChanges();
		// 		console.log('')
		// 	},
		// 	tax 	  : 0.1,
		// 	classDS   : banhji.segmentItem.ds,
		// 	itemList  : function() {
		// 		var list;
		// 		if(banhji.itemDS.data().length ===0) {
		// 			banhji.itemDS.fetch(function(e){
		// 				list = itemDS.data();
		// 			});
		// 		} else {
		// 			list = itemDS.data();
		// 		}
		// 		return list;
		// 	},
		// 	subTotal  : 0,
		// 	taxAmount : 0,
		// 	grandTotal: 0,
		// 	getVendor : function() {
		// 		banhji.vendors.selectModal();
		// 	},
		// 	itemDS 	  : itemVM,
		// 	setCurrent: function(currentModel) {
		// 		this.set("current", currentModel);
		// 	},
		// 	addNew 	  : function() {
		// 		this.ds.insert(0,{
		// 			type 			: "po",
		// 			invoice_number 	: null,
		// 			amount 			: 0.00,
		// 			paid 			: 0.00,
		// 			status 			: 'open',
		// 			notice 			: 'null',
		// 			comment 		: 'null',
		// 			due_date 		: new Date(),
		// 			expected_date 	: new Date(),
		// 			payment_term 	: 0,
		// 			segment 		: null,
		// 			delivery_address: null,
		// 			vendor 			: banhji.vendors.get('current') ? banhji.vendors.get('current') : null
		// 		});
		// 		this.setCurrent(this.ds.at(0));
		// 	},
		// 	addItem   : function() {
		// 		this.itemDS.add();
		// 	},
		// 	removeItem: function(e) {
		// 		this.itemDS.remove(e);
		// 	},
		// 	sync 	  : function() {
		// 		var dfd = $.Deferred();
		// 		this.ds.sync();
		// 		this.ds.bind("requestEnd", function(e){
		// 			if(e.response.results) {
		// 				dfd.resolve({type: e.type, data: e.response.results});
		// 			} else {
		// 				dfd.reject({error: e.type + ' can not process.'});
		// 			}
		// 		});
		// 		return dfd.promise();
		// 	},
		// 	getTax 	  : function() {
		// 		var amount = 0;
		// 		$.each(this.itemDS.ds.data(), function(i, v){
		// 			if(v.isTaxed === true) {
		// 				amount += kendo.parseFloat(v.amount);
		// 			}
		// 		});
		// 		this.set("taxAmount", amount * this.get('tax'));
		// 		this.set('grandTotal', amount * this.get('tax') + kendo.parseFloat(this.get('subTotal')));
		// 	},
		// 	total 	  : function() {
		// 		var price = 0;
		// 		$.each(this.itemDS.ds.data(), function(i, v){
		// 			price = price + v.amount;
		// 		});
		// 		this.set('grandTotal', price + this.get('taxAmount'));
		// 		this.set('subTotal', kendo.format("{0:c}", price));
		// 	},
		// 	save 	  : function() {
		// 		var that = this;
		// 		var validator = $(".bill-form").kendoValidator().data('kendoValidator');
		// 		if(validator.validate()) {
		// 			this.get('current').set('amount', kendo.parseFloat(this.get('subTotal')));
		// 			this.sync()
		// 			.then(function(res){
		// 				if(res.type === 'create') {
		// 					$.each(that.itemDS.ds.data(), function(i, v) {
		// 						v.set('bill', res.data[0]);
		// 					});
		// 				} 
		// 				that.itemDS.save();
		// 			});
		// 		} else {
		// 			$(".notification").data('kendoNotification').info("សូមបំពេញផ្នែកដែលមានសញ្ញា *");
		// 		}	
		// 	}
		// });
		// instantiate layout and view
		var po = new kendo.View("#purchase-order-tmpl", {model: banhji.vm});
		banhji.vm.itemList();
		if(!auth.getLogin()) {
			banhji.router.navigate('/login');
		} else {
			banhji.vm.addNew();
			banhji.view.layout.showIn('#content', po);
		}
	});

	banhji.router.route('/vendors/u/po/:id', function(id){
		// instantiate layout and view
		var po = new kendo.View("#purchase-order-tmpl", {model: banhji.vm});
		banhji.vm.itemList();
		if(!auth.getLogin()) {
			banhji.router.navigate('/login');
		} else {
			var vendor, bill, that = this;
			bill = banhji.vm.ds.get(id);
			if(bill === undefined) {
				banhji.vm.ds.query({
					filter:{ field: 'id', operator: '', value: id},
					page: 1,
					limit: 1
				}).done(function(e){
					banhji.vm.setCurrent(banhji.vm.ds.data()[0]);
					banhji.vm.itemDS.ds.query({
						filter:{field: 'bill_id', operator: '', value:banhji.vm.ds.data()[0].id},
						limit: 100,
						page: 1
					}).then(function(e){
						banhji.vm.total();
					});
				});
			} else {
				this.setCurrent(bill);
				this.itemDS.read();
			}
			banhji.view.layout.showIn('#content', po);
		}
	});

	// account section
	banhji.router.route('/accounts(/:id)', function(id){
		// list all accounts
		if(!auth.getLogin()) {
			banhji.router.navigate('/login');
		} else {
			banhji.view.layout.showIn('#menu', banhji.view.menu);
			banhji.view.layout.showIn('#content', banhji.view.accountDash);
			if(id) {
				console.log("accounting Section: " +id);
			} else {
				console.log("accounting Section");
			}
		}	
	});

	banhji.router.route('/accounts/u/new', function() {
		var newAccount = new kendo.View("#account-new-tmpl", {model: banhji.account});
		if(!auth.getLogin()) {
			banhji.router.navigate('/login');
		} else {
			banhji.view.layout.showIn('#menu', banhji.view.menu);
			banhji.view.layout.showIn('#content', newAccount);
			banhji.account.addNew();
		}	
	});

	banhji.router.route('/accounts/u/gl', function() {
		var gl = new kendo.View("#journal-account-tmpl", {model: banhji.gl});
		if(!auth.getLogin()) {
			banhji.router.navigate('/login');
		} else {
			banhji.gl.init();
			banhji.gl.add();
			banhji.view.layout.showIn('#menu', banhji.view.menu);
			banhji.view.layout.showIn('#content', gl);
			banhji.gl.addEntry();
			banhji.gl.addEntry();
		}	
	});

	banhji.router.route('/cashiers', function(){
		var cashier = new kendo.View("#cashier-tmpl", { model: banhji.cashiers.page });
		if(!auth.getLogin()) {
			banhji.router.navigate('/login');
		} else {
			banhji.view.layout.showIn('#menu', banhji.view.menu);
			banhji.view.layout.showIn('#content', cashier);
		}
	});

	banhji.router.route('/cashiers/u/deposit', function(){
		var deposit = new kendo.View("#cashier-deposit-tmpl", {model: banhji.cashiers.deposit});
		if(!auth.getLogin()) {
			banhji.router.navigate('/login');
		} else {
			banhji.cashiers.deposit.init();
			banhji.cashiers.deposit.addJournal();
			banhji.view.layout.showIn('#menu', banhji.view.menu);
			banhji.view.layout.showIn('#content', deposit);
			banhji.cashiers.deposit.addEntry();
		}	
	});

	banhji.router.route('/cashiers/u/transfer', function(){
		var transfer = new kendo.View("#cashier-transfer-tmpl", {model: banhji.cashiers.transfer});
		if(!auth.getLogin()) {
			banhji.router.navigate('/login');
		} else {
			banhji.cashiers.transfer.init();
			banhji.cashiers.transfer.addJournal();
			banhji.view.layout.showIn('#menu', banhji.view.menu);
			banhji.view.layout.showIn('#content', transfer);
			banhji.cashiers.transfer.addEntry();
		}	
	});

	banhji.router.route('/cashier/u/vendor', function(){});

	// inventory section

	// electricity vendor
//DAWINE -----------------------------------------------------------------------------------------
	banhji.pageLoaded = {};
	
	banhji.router.route("/customers", function(){
		if(!auth.getLogin()){
			banhji.router.navigate('/login');
		}else{
			var vm = banhji.customerCenter;	
			banhji.view.layout.showIn('#menu', banhji.view.menu);					
			banhji.view.layout.showIn("#content", banhji.view.customerCenter);
			banhji.view.customerCenter.showIn("#detail", banhji.view.customerDashboard);			
			$("#secondary-menu").html("<li><a href='\#/customers' class='glyphicons home'><i></i></a></li> <li><a href='\#/customer'>អតិថិជនថ្មី</a></li> <li><a href='\#/meter/1'>កុងទ័រ</a></li> <li><a href='\#/reading/1'>អំនាន</a></li> <li><a href='\#/uInvoice/1'>វិក្កយបត្រអគ្គីសនី</a></li> <li><a href='\#/uInvoice_print/1'>បោះពុម្ពវិក្កយបត្រអគ្គីសនី</a></li> <li><a href='\#/cashier'>បេឡាករ</a></li> ");			

			if(banhji.pageLoaded["customers"]==undefined){
				banhji.pageLoaded["customers"] = true;

				vm.loadOutStandingInvoice();			
			
				var grid = $("#sidebar").kendoGrid({
					dataSource: vm.customerDS,					
					selectable: true,
					columns: [
						{ title: ""}
					],
					height: "400px",
					rowTemplate: kendo.template($("#customerListTmpl").html()),
					change: function(){
						var selected = this.select();					
						var data = this.dataItem(selected);

						vm.set("showMenu", true);
						vm.set("customer", data);
											
						//banhji.router.navigate("#customers/"+ data.id, false);

						var currentPage = vm.get("currentPage");
						switch(currentPage){
						case "dashBoard":
							vm.loadOutStandingInvoice(data.id);
							break;
						case "customerDetail":
							banhji.customer.pageLoad(1, data.id);																
							break;									
						case "statement":
						    banhji.statement.pageLoad(data.id);					    
						    break;
						default:
						 	//Default here;
						}											
					}
				}).data("kendoGrid");

				$("#company").kendoDropDownList({
		            optionLabel: "(--- ជ្រើសរើស ---)",
		            dataTextField: "name",
		            dataValueField: "id",
		            dataSource: vm.companyDS
		        }).data("kendoDropDownList");

		        $("#customerType").kendoDropDownList({
		            optionLabel: "(--- ជ្រើសរើស ---)",
		            dataTextField: "name",
		            dataValueField: "id",
		            dataSource: {
		                transport: {
							read: {
								url: baseUrl + "contacts/type",
								headers: {
									"Entity": getDB()
								},
								type: "GET",
								dataType: "json"
							}
						},
						serverFiltering: true,
						filter: { field:"parent_id", value: 1 }
					}                
		        }).data("kendoDropDownList");

		        $("#currency").kendoDropDownList({
		            optionLabel: "(--- ជ្រើសរើស ---)",	            
		            dataTextField: "code",
		            dataValueField: "id",	            
		            dataSource: {
		            	transport: {
							read: {
								url: baseUrl + "contacts/currency",
								headers: {
									"Entity": getDB()
								},
								type: "GET",
								dataType: "json"
							}				
						}
		            } 
		        }).data("kendoDropDownList");

		        //Transactions
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

				$("#grid").kendoGrid({
				    dataSource: vm.invoiceDS,		    	    
				    autoBind: false,				    
				    pageable: true,
				    sortable: true,		                           
				    rowTemplate: kendo.template($("#statementCollectionRowTemplate").html())
				});

				$("#search").click(function(e){
		        	e.preventDefault();

		        	var start = sdate.value(),
		        		end = edate.value(),		        		
		        		para = Array();

		        	//Dates
		        	if(start && end){
		            	para.push({ field:"payment_date >=", value: kendo.toString(start, "yyyy-MM-dd") });
		            	para.push({ field:"payment_date <=", value: kendo.toString(end, "yyyy-MM-dd") });            	            	
		            }else if(start){
		            	para.push({ field:"payment_date", value: kendo.toString(start, "yyyy-MM-dd") });
		            }else if(end){
		            	para.push({ field:"payment_date <=", value: kendo.toString(end, "yyyy-MM-dd") });
		            }else{
		            	
		            }

		            vm.invoiceDS.filter(para);		    		
				});
			}				
		}
	});
	banhji.router.route("/customer(/:id)", function(id){
		if(!auth.getLogin()){
			banhji.router.navigate('/login');
		}else{
			var vm = banhji.customer;
			vm.pageLoad(id);

			//var company_id = auth.getLogin().companies[0].id;			

			if(id){
				banhji.view.customerCenter.showIn("#detail", banhji.view.customer);
				var cus = banhji.customerCenter.get("customer");
				vm.set("customer", cus);
			}else{
				banhji.view.layout.showIn("#content", banhji.view.customer);
				$("#title").text("ចុះឈ្មោះអតិថិជនថ្មី");
				kendo.fx($("#slide-form")).slideIn("down").play();
			}			

			if(banhji.pageLoaded["customer"]==undefined){
				banhji.pageLoaded["customer"] = true;

				var company = $("#company").kendoDropDownList({
		            optionLabel: "(--- ជ្រើសរើស ---)",
		            dataTextField: "name",
		            dataValueField: "id",
		            dataSource: vm.companyDS,
		            change: function(e){
		            	var value = this.value();                		
	                	vm.generateNumber(value);
		            }
		        }).data("kendoDropDownList");

		        $("#customerType").kendoDropDownList({
		            optionLabel: "(--- ជ្រើសរើស ---)",
		            dataTextField: "name",
		            dataValueField: "id",
		            dataSource: {
		                transport: {
							read: {
								url: baseUrl + "contacts/type",
								headers: {
									"Entity": getDB()
								},
								type: "GET",
								dataType: "json"
							}
						},
						serverFiltering: true,
						filter: { field:"parent_id", value: 1 }
					}                
		        }).data("kendoDropDownList");

		        $("#currency").kendoDropDownList({
		            optionLabel: "(--- ជ្រើសរើស ---)",	            
		            dataTextField: "code",
		            dataValueField: "id",	            
		            dataSource: {
		            	transport: {
							read: {
								url: baseUrl + "contacts/currency",
								headers: {
									"Entity": getDB()
								},
								type: "GET",
								dataType: "json"
							}				
						}
		            } 
		        }).data("kendoDropDownList");

		        $("#ar").kendoDropDownList({		        		        	
		            optionLabel: "(--- ជ្រើសរើស ---)",	            
		            dataTextField: "name",
		            dataValueField: "id",	            
		            dataSource: {
		                transport: {
							read: {
								url: baseUrl + "contacts/account",
								headers: {
									"Entity": getDB()
								},
								type: "GET",
								dataType: "json"
							}
						},
						serverFiltering: true,
						filter: { field:"account_type_id", value: 7 }
					}                
		        }).data("kendoDropDownList");

		        $("#ra").kendoDropDownList({		        		        	
		            optionLabel: "(--- ជ្រើសរើស ---)",	            
		            dataTextField: "name",
		            dataValueField: "id",	            
		            dataSource: {
		                transport: {
							read: {
								url: baseUrl + "contacts/account",
								headers: {
									"Entity": getDB()
								},
								type: "GET",
								dataType: "json"
							}
						},
						serverFiltering: true,
						filter: { field:"account_type_id", value: 15 }
					}                
		        }).data("kendoDropDownList");	        

		        var validator = $("#example").kendoValidator().data("kendoValidator"),
				status = $("#status");

		        $("#save").click(function(e){				
					e.preventDefault();

					if(validator.validate() && vm.get("isDuplicateNumber")==false){
		            	vm.save();     	

		            	status.kendoNotification({
						    allowHideAfter: 1000
						});

			   //          status.text("កត់ត្រាបានសំរេច")
				  //       	.removeClass("alert alert-error")
				  //       	.addClass("alert alert-success");
				  //       status.show();
				  //       setTimeout(function(){
						// 	status.hide();
						// },4000);
			        }else{		        	
			            status.text("សូមត្រួតពិនិត្រឪ្យបានត្រឹមត្រូវម្ដងទៀត")
			                .removeClass("alert alert-success")
				            .addClass("alert alert-error");
			        }		            
				});	        	
			}
		}				
	});
	
	banhji.router.route("invoice(/:id)", function(id){
		if(banhji.ds.companyDS.data().length>0){
			var vm = banhji.invoice;

			banhji.view.layout.showIn("#layout-view", banhji.view.invoice);				
			kendo.fx($("#slide-form")).slideIn("down").play();

			if(id!==undefined){
				vm.loadEdit(id);
			}else{
				var customer_id = banhji.customerCenter.get("customer").id;					
				vm.pageLoad("Invoice", customer_id);			
			}

			if(vm.get("isLoaded")===false){
				vm.set("isLoaded", true);

				var validator = $("#example").kendoValidator().data("kendoValidator"),
					status = $("#status");

				$("#save").click(function(e){
					e.preventDefault();
								
		            if(validator.validate()){
		            	if(id!==undefined){            		
		            		vm.update();            		
		            	}else{
		            		vm.save();
		            	}            	
		            	           	
			            status.text("កត់ត្រាបានសំរេច")
				        	.removeClass("alert alert-error")
				        	.addClass("alert alert-success");
				        status.show();
				        setTimeout(function(){
							status.hide();
						},4000);
			        }else{		        	
			            status.text("សូមត្រួតពិនិត្រឪ្យបានត្រឹមត្រូវម្ដងទៀត")
			                .removeClass("alert alert-success")
				            .addClass("alert alert-error");
			        }
				});
			}
		}else{
			banhji.router.navigate("#customers", false);
		}			
	});

	banhji.router.route("receipt(/:id)", function(id){
		if(banhji.ds.companyDS.data().length>0){
			var vm = banhji.invoice;

			banhji.view.layout.showIn("#layout-view", banhji.view.receipt);				
			kendo.fx($("#slide-form")).slideIn("down").play();

			if(id!==undefined){
				vm.loadEdit(id);
			}else{
				var customer_id = banhji.customerCenter.get("customer").id;					
				vm.pageLoad("Receipt", customer_id);			
			}

			if(vm.get("receiptLoaded")===false){
				vm.set("receiptLoaded", true);

				var validator = $("#example").kendoValidator().data("kendoValidator"),
					status = $("#status");

				$("#save").click(function(e){
					e.preventDefault();
								
		            if(validator.validate()){
		            	if(id!==undefined){            		
		            		vm.update();            		
		            	}else{
		            		vm.save();
		            	}            	
		            	           	
			            status.text("កត់ត្រាបានសំរេច")
				        	.removeClass("alert alert-error")
				        	.addClass("alert alert-success");
				        status.show();
				        setTimeout(function(){
							status.hide();
						},4000);
			        }else{		        	
			            status.text("សូមត្រួតពិនិត្រឪ្យបានត្រឹមត្រូវម្ដងទៀត")
			                .removeClass("alert alert-success")
				            .addClass("alert alert-error");
			        }
				});
			}
		}else{
			banhji.router.navigate("#customers", false);
		}		
	});	

	banhji.router.route("so(/:id)", function(id){
		if(banhji.ds.companyDS.data().length>0){
			var vm = banhji.invoice;

			banhji.view.layout.showIn("#layout-view", banhji.view.so);				
			kendo.fx($("#slide-form")).slideIn("down").play();

			if(id!==undefined){
				vm.loadEdit(id);
			}else{
				var customer_id = banhji.customerCenter.get("customer").id;					
				vm.pageLoad("SO", customer_id);			
			}

			if(vm.get("soLoaded")===false){
				vm.set("soLoaded", true);

				var validator = $("#example").kendoValidator().data("kendoValidator"),
					status = $("#status");

				$("#save").click(function(e){
					e.preventDefault();
								
		            if(validator.validate()){
		            	if(id!==undefined){            		
		            		vm.update();            		
		            	}else{
		            		vm.save();
		            	}            	
		            	           	
			            status.text("កត់ត្រាបានសំរេច")
				        	.removeClass("alert alert-error")
				        	.addClass("alert alert-success");
				        status.show();
				        setTimeout(function(){
							status.hide();
						},4000);
			        }else{		        	
			            status.text("សូមត្រួតពិនិត្រឪ្យបានត្រឹមត្រូវម្ដងទៀត")
			                .removeClass("alert alert-success")
				            .addClass("alert alert-error");
			        }
				});
			}
		}else{
			banhji.router.navigate("#customers", false);
		}	
	});

	banhji.router.route("estimate(/:id)", function(id){
		if(banhji.ds.companyDS.data().length>0){
			var vm = banhji.invoice;

			banhji.view.layout.showIn("#layout-view", banhji.view.estimate);				
			kendo.fx($("#slide-form")).slideIn("down").play();

			if(id!==undefined){
				vm.loadEdit(id);
			}else{
				var customer_id = banhji.customerCenter.get("customer").id;					
				vm.pageLoad("Estimate", customer_id);			
			}

			if(vm.get("estimateLoaded")===false){
				vm.set("estimateLoaded", true);

				var validator = $("#example").kendoValidator().data("kendoValidator"),
					status = $("#status");

				$("#save").click(function(e){
					e.preventDefault();
								
		            if(validator.validate()){
		            	if(id!==undefined){            		
		            		vm.update();            		
		            	}else{
		            		vm.save();
		            	}            	
		            	           	
			            status.text("កត់ត្រាបានសំរេច")
				        	.removeClass("alert alert-error")
				        	.addClass("alert alert-success");
				        status.show();
				        setTimeout(function(){
							status.hide();
						},4000);
			        }else{		        	
			            status.text("សូមត្រួតពិនិត្រឪ្យបានត្រឹមត្រូវម្ដងទៀត")
			                .removeClass("alert alert-success")
				            .addClass("alert alert-error");
			        }
				});
			}
		}else{
			banhji.router.navigate("#customers", false);
		}	
	});

	banhji.router.route("gdn(/:id)", function(id){
		if(banhji.ds.companyDS.data().length>0){
			var vm = banhji.invoice;
		
			banhji.view.layout.showIn("#layout-view", banhji.view.gdn);				
			kendo.fx($("#slide-form")).slideIn("down").play();

			if(id!==undefined){
				vm.loadEdit(id);
			}else{
				var customer_id = banhji.customerCenter.get("customer").id;					
				vm.pageLoad("GDN", customer_id);			
			}

			if(vm.get("gdnLoaded")===false){
				vm.set("gdnLoaded", true);

				var validator = $("#example").kendoValidator().data("kendoValidator"),
					status = $("#status");

				$("#save").click(function(e){
					e.preventDefault();
								
		            if(validator.validate()){
		            	if(id!==undefined){            		
		            		vm.update();            		
		            	}else{
		            		vm.save();
		            	}            	
		            	           	
			            status.text("កត់ត្រាបានសំរេច")
				        	.removeClass("alert alert-error")
				        	.addClass("alert alert-success");
				        status.show();
				        setTimeout(function(){
							status.hide();
						},4000);
			        }else{		        	
			            status.text("សូមត្រួតពិនិត្រឪ្យបានត្រឹមត្រូវម្ដងទៀត")
			                .removeClass("alert alert-success")
				            .addClass("alert alert-error");
			        }
				});
			}
		}else{
			banhji.router.navigate("#customers", false);
		}	
	});

	banhji.router.route("statement/:id", function(id){		
		if(banhji.ds.companyDS.data().length>0){
			var vm = banhji.statement;
			
			banhji.view.layout.showIn("#layout-view", banhji.view.customerCenter);
			banhji.view.customerCenter.showIn("#detail", banhji.view.statement);

			if(id!==undefined){				
				vm.pageLoad(id);
			}else{
				banhji.router.navigate("#customers", false);			
			}			
		}else{
			banhji.router.navigate("#customers", false);
		}	
	});

	banhji.router.route("/meter/:utility_id", function(utility_id){
		if(!auth.getLogin()){
			banhji.router.navigate('/login');
		}else{
			var vm = banhji.meter;
			
			banhji.view.layout.showIn("#content", banhji.view.eMeter);		
			kendo.fx($("#slide-form")).slideIn("down").play();
			
			vm.pageLoad(utility_id);		

			if(banhji.pageLoaded["eMeter"]==undefined || banhji.pageLoaded["wMeter"]==undefined){				
				if(utility_id==1){					
					banhji.pageLoaded["eMeter"] = true;

					var location = $("#location").kendoDropDownList({
			            optionLabel: "(--- ជ្រើសរើស ---)",
			            autoBind: false,
			            valuePrimitive: true,
			            dataTextField: "name",
			            dataValueField: "id",			            
			            dataSource: vm.locationDS
			        }).data("kendoDropDownList");

					$("#electricityBox").kendoDropDownList({
			        	optionLabel: "(--- ជ្រើសរើស ---)",
			        	autoBind: false,
			        	valuePrimitive: true,
			        	cascadeFrom: "location",
			        	cascadeFromField: "location_id",	            	            
			            dataTextField: "number",
			            dataValueField: "id",	            
			            dataSource: vm.electricityBoxDS
			        }).data("kendoDropDownList");
				}else{					
					banhji.pageLoaded["wMeter"] = true;
				}				

				$("#customers").kendoComboBox({
					placeholder: "លេខកូដអតិថិជន...",
	                dataTextField: "fullIdName",
	                dataValueField: "id",
	                filter: "search",
	                autoBind: false,
	                minLength: 3,
	                height: 400,
	                dataSource: vm.contactDS,
	                change: function(e){
	                	var value = this.value();                		
	                	var data = this.dataSource.get(value);				
						
						vm.set("meter", null);
						vm.set("contact_id", data.id);
						vm.set("company_id", data.company_id);
						vm.loadMeter(value);
						vm.loadData(data.company_id);				
	                }
	            });

	            $("#meters").kendoComboBox({
					placeholder: "លេខកូដកុងទ័រ...",
	                dataTextField: "number",
	                dataValueField: "id",
	                filter: "startswith",
	                autoBind: false,
	                minLength: 3,
	                height: 400,
	                dataSource: vm.meterDS,
	                change: function(e){
	                	var value = this.value();                		
	                	var data = this.dataSource.get(value);				
						
						vm.set("meter", null);
						vm.set("contact_id", data.contact_id);
						vm.set("company_id", data.company_id);
						vm.loadMeter(data.contact_id);
						vm.loadData(data.company_id);				
	                }
	            });		        

		        var validator = $("#example").kendoValidator().data("kendoValidator"),
				status = $("#status");

		        $("#save").click(function(e){				
					e.preventDefault();

					if(validator.validate()){
		            	vm.save();     	

			            status.text("កត់ត្រាបានសំរេច")
				        	.removeClass("alert alert-error")
				        	.addClass("alert alert-success");
				        status.show();
				        setTimeout(function(){
							status.hide();
						},4000);
			        }else{		        	
			            status.text("សូមត្រួតពិនិត្រឪ្យបានត្រឹមត្រូវម្ដងទៀត")
			                .removeClass("alert alert-success")
				            .addClass("alert alert-error");
			        }		            
				});	        	
			}
		}				
	});
	banhji.router.route("/reading/:utility_id(/:meter_id)", function(utility_id, meter_id){
		if(!auth.getLogin()){
			banhji.router.navigate('/login');
		}else{		
			var vm = banhji.reading;
			vm.pageLoad(utility_id, meter_id);

			banhji.view.layout.showIn("#content", banhji.view.reading);

			if(banhji.pageLoaded["reading"]==undefined){
				banhji.pageLoaded["reading"] = true;

				$("#pager").kendoPager({
	                dataSource: vm.dataSource
	            });

	            $("#meters").kendoComboBox({
					placeholder: "លេខកូដកុងទ័រ...",
					valuePrimitive: true,
	                dataTextField: "number",
	                dataValueField: "id",
	                filter: "startswith",
	                autoBind: false,
	                minLength: 3,
	                height: 400,
	                dataSource: vm.meterDS
	            });

				var company = $("#company").kendoDropDownList({
		            optionLabel: "(--- អាជ្ញាបណ្ណ ---)",
		            valuePrimitive: true,
		            dataTextField: "name",
		            dataValueField: "id",
		            dataSource: vm.companyDS
		        }).data("kendoDropDownList");

		        var location = $("#location").kendoDropDownList({
		        	optionLabel: "(--- តំបន់ ---)",
	                autoBind: false,
	                cascadeFrom: "company",
	                cascadeFromField: "company_id",
	                valuePrimitive: true,                
	                dataTextField: "name",
	                dataValueField: "id",
	                dataSource: vm.locationDS
	            }).data("kendoDropDownList");				
				
				var validator = $("#example").kendoValidator({
					rules: {
				        greaterdate: function (input) {
		                    if (input.is("[data-greaterdate-msg]") && input.val() != "") {                                    
		                        var edate = kendo.parseDate(input.val()),
		                            sdate = kendo.parseDate($("[name='" + input.data("greaterdateField") + "']").val());
		                        return sdate == null || sdate.getTime() < edate.getTime();
		                    }
		                    return true;
		                }               
				    }
				}).data("kendoValidator"), status = $("#status");

				$("#save").click(function(e){
					e.preventDefault();
					
		            if(validator.validate() && vm.checkInput()){
		            	vm.save();

			            status.text("កត់ត្រាបានសំរេច")
				        	.removeClass("alert alert-error")
				        	.addClass("alert alert-success");
				        status.show();
				        setTimeout(function(){
							status.hide();
						},4000);
			        }else{
			        	status.show();		        	        	
			            status.text("សូមត្រួតពិនិត្រឪ្យបានត្រឹមត្រូវម្ដងទៀត")
			                .removeClass("alert alert-success")
				            .addClass("alert alert-error");
			        }
				});
			}
		}		
	});
	banhji.router.route("/uInvoice/:utility_id", function(utility_id){
		if(!auth.getLogin()){
			banhji.router.navigate('/login');
		}else{
			banhji.view.layout.showIn("#content", banhji.view.uInvoice);				
			var vm = banhji.uInvoice;
			vm.pageLoad(utility_id);
			
			if(banhji.pageLoaded["uInvoice"]==undefined){
				banhji.pageLoaded["uInvoice"] = true;			

				$("#meters").kendoComboBox({
					placeholder: "លេខកូដកុងទ័រ...",
					valuePrimitive: true,
	                dataTextField: "number",
	                dataValueField: "id",
	                filter: "startswith",
	                autoBind: false,
	                minLength: 3,
	                height: 400,
	                dataSource: vm.meterDS
	            });

	            $("#pager").kendoPager({
	                dataSource: vm.readingDS
	            });

				var company = $("#company").kendoDropDownList({
		            optionLabel: "(--- អាជ្ញាបណ្ណ ---)",
		            valuePrimitive: true,
		            dataTextField: "name",
		            dataValueField: "id",
		            dataSource: vm.companyDS
		        }).data("kendoDropDownList");

		        var location = $("#location").kendoDropDownList({
		        	optionLabel: "(--- តំបន់ ---)",
	                autoBind: false,
	                cascadeFrom: "company",
	                cascadeFromField: "company_id",
	                valuePrimitive: true,                
	                dataTextField: "name",
	                dataValueField: "id",
	                dataSource: vm.locationDS
	            }).data("kendoDropDownList");

				var validator = $("#example").kendoValidator().data("kendoValidator"),
					status = $("#status");						

				$("#save").click(function(e){
					e.preventDefault();			
					
		            if(validator.validate()){	            	            	
		            	vm.save();
						
			            status.text("កត់ត្រាបានសំរេច")
				        	.removeClass("alert alert-error")
				        	.addClass("alert alert-success");
				        status.show();
				        setTimeout(function(){
							status.hide();
						},4000);				        
			        }else{
			        	status.show();		        	
			            status.text("សូមត្រួតពិនិត្រឪ្យបានត្រឹមត្រូវម្ដងទៀត")
			                .removeClass("alert alert-success")
				            .addClass("alert alert-error");
			        }
				});
			}
		}		
	});
	banhji.router.route("/uInvoice_print/:utility_id(/:id)", function(utility_id, id){
		if(!auth.getLogin()){
			banhji.router.navigate('/login');
		}else{
			banhji.view.layout.showIn("#content", banhji.view.uInvoicePrint);				
			kendo.fx($("#slide-form")).slideIn("down").play();
			var vm = banhji.uInvoicePrint;
			vm.pageLoad(utility_id, id);			
			
			if(banhji.pageLoaded["uInvoice_print"]==undefined){
				banhji.pageLoaded["uInvoice_print"] = true;

				$("#pager").kendoPager({
	                dataSource: vm.dataSource
	            });
				
				$("#invoices").kendoComboBox({
					placeholder: "លេខវិក្កយបត្រ...",
					valuePrimitive: true,
	                dataTextField: "number",
	                dataValueField: "id",
	                filter: "startswith",
	                autoBind: false,
	                minLength: 3,
	                height: 400,
	                dataSource: vm.invoiceDS,
	                change: function(e) {
					    var value = this.value();
					    vm.dataSource.query({
					    	filter: { field:"id", value: value }
					    }).then(function(e){
					    	vm.barcod();					    				    	
					    });
					}
	            });

				var company = $("#company").kendoDropDownList({
		            optionLabel: "(--- អាជ្ញាបណ្ណ ---)",
		            valuePrimitive: true,
		            dataTextField: "name",
		            dataValueField: "id",
		            dataSource: vm.companyDS
		        }).data("kendoDropDownList");

		        var location = $("#location").kendoDropDownList({
		        	optionLabel: "(--- តំបន់ ---)",
	                autoBind: false,
	                cascadeFrom: "company",
	                cascadeFromField: "company_id",
	                valuePrimitive: true,                
	                dataTextField: "name",
	                dataValueField: "id",
	                dataSource: vm.locationDS
	            }).data("kendoDropDownList");			
			}
		}							
	});
	banhji.router.route("/cashier(/:id)", function(id){
		if(!auth.getLogin()){
			banhji.router.navigate('/login');
		}else{
			banhji.view.layout.showIn('#menu', banhji.view.menu);
			banhji.view.layout.showIn("#content", banhji.view.cashier);				
			kendo.fx($("#slide-form")).slideIn("down").play();
			var vm = banhji.cashier;
			vm.pageLoad(id);
			
			if(banhji.pageLoaded["cashier"]==undefined){
				banhji.pageLoaded["cashier"] = true;
				
				$("#customers").kendoComboBox({
					placeholder: "លេខកូដអតិថិជន...",
					valuePrimitive: true,
	                dataTextField: "fullIdName",
	                dataValueField: "id",
	                filter: "search",
	                autoBind: false,
	                minLength: 3,
	                height: 400,
	                dataSource: vm.contactDS,
	                change: function(e) {
					    var value = this.value();
					    var data = this.dataSource.get(value);
					    vm.set("customer", data);
					    vm.transactionDS.filter({ field:"id", operator:"where_related", table:"contact", value: value });
					    vm.loadInvoice(value, data.fullIdName);				    	
					}
	            });

	            $("#paymentMethod").kendoDropDownList({
		            optionLabel: "(--- ជ្រើសរើស ---)",
		            valuePrimitive: true,
		            dataTextField: "name",
		            dataValueField: "id",
		            dataSource: vm.paymentMethodDS
		        }).data("kendoDropDownList");

		        $("#cashAccount").kendoDropDownList({
		        	valuePrimitive: true,
		            optionLabel: "(--- ជ្រើសរើស ---)",	            
		            dataTextField: "name",
		            dataValueField: "id",	            
		            dataSource: {
		                transport: {
							read: {
								url: baseUrl + "contacts/account",
								type: "GET",
								dataType: "json"
							}
						},
						serverFiltering: true,
						filter: { field:"account_type_id", value: 6 }
					}                
		        }).data("kendoDropDownList");

		        var validator = $("#exampleValidate").kendoValidator().data("kendoValidator"),
					status = $("#status");

				$("#save").click(function(e){
					e.preventDefault();
								
		            if(validator.validate()){
		            	vm.save();       	
		            	           	
			            status.text("កត់ត្រាបានសំរេច")
				        	.removeClass("alert alert-error")
				        	.addClass("alert alert-success");
				        status.show();
				        setTimeout(function(){
							status.hide();
						},4000);
			        }else{
			        	status.show();		        	
			            status.text("សូមត្រួតពិនិត្រឪ្យបានត្រឹមត្រូវម្ដងទៀត")
			                .removeClass("alert alert-success")
				            .addClass("alert alert-error");
			        }
				});	        		
			}
		}							
	});
	banhji.router.route("/customer_list", function(){
		if(!auth.getLogin()){
			banhji.router.navigate('/login');
		}else{
			banhji.view.layout.showIn("#content", banhji.view.customerList);
			kendo.fx($("#slide-form")).slideIn("down").play();			
			
			if(banhji.pageLoaded["customer_list"]==undefined){
				banhji.pageLoaded["customer_list"] = true;

				var dataSource =  dataStore(baseUrl + "contacts/index");
				var companyDS =  dataStore(baseUrl + "contacts/company");

				$("#grid").kendoGrid({
				    dataSource: dataSource,
				    groupable: true,
				    autoBind: false,
				    pageable: true,        
				    columns: [ 
				    		{ field: "number", title: "លេខកូដ" }, 
				    		{ field: "fullname", title: "ឈ្មោះ" },
				    		{ field: "contact_types[0].name", title: "ប្រភេទ" },
				    		{ field: "currencies[0].code", title: "រូបិយ​ប័ណ្ណ" },
				    		{ field: "deposits", title: "ប្រាក់កក់", template: "#=kendo.toString(deposits, 'c0', currencies[0].locale)#",
				    			attributes: { style: "text-align: right;"}
				    		},
				    		{ field: "balance", title: "សមតុល្យចុងគ្រា", template: "#=kendo.toString(balance, 'c0', currencies[0].locale)#", 
				    			attributes: { style: "text-align: right;"} 
				    		}
				    ]
				});

				var copmany = $("#company").kendoDropDownList({
		            optionLabel: "(--- អាជ្ញាបណ្ណ ---)",
		            valuePrimitive: true,
		            dataTextField: "name",
		            dataValueField: "id",
		            dataSource: companyDS,
		            change: function(e){
		            	var value = this.value();

		            	dataSource.query({
		            		filter: { field:"company_id", value: value },
		            		page: 1,
		            		pageSize: 100
		            	});
		            }
		        }).data("kendoDropDownList"); 
		    }      
		}	
	});
	banhji.router.route("/payment_summary", function(){
		if(!auth.getLogin()){
			banhji.router.navigate('/login');
		}else{
			banhji.view.layout.showIn("#content", banhji.view.paymentSummary);
			kendo.fx($("#slide-form")).slideIn("down").play();			
			
			if(banhji.pageLoaded["payment_summary"]==undefined){
				banhji.pageLoaded["payment_summary"] = true;		

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
		            	$("#lblStartDate").text("ចាប់ពី " + kendo.toString(start, "dd-MM-yyyy"));
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
		
				var paymentDS = new kendo.data.DataSource({
					transport: {
						read 	: {
							url: baseUrl + "payments/summary",
							type: "GET",
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
									page: options.page,
									sort: options.sort,
									filter: options.filter
								};
							} else {
								return {models: kendo.stringify(options.models)};
							}
						}
					},
					page: 1,
					pageSize: 100,		            				
					serverFiltering: true,										
					schema 	: {
						model: {
							id: 'id'
						},
						data: 'results',
						total: 'count'
					},
					group:{ 						
						field: "company_name", aggregates: [			                
			                { field: "deposits", aggregate: "sum" },
			                { field: "sales", aggregate: "sum" },
			                { field: "payments", aggregate: "sum" }
			            ]
			        },
		            aggregate: [                
		                { field: "deposits", aggregate: "sum" },
		                { field: "sales", aggregate: "sum" },
		                { field: "payments", aggregate: "sum" }
		            ]                   
				});

				$("#grid").kendoGrid({
				    dataSource: paymentDS,		    	    
				    autoBind: false,				    
				    pageable: true,
				    sortable: true,		                           
				    columns: [    		
			    		{ field: "company_name", title: "ក្រុមហ៊ុន" },
			    		{ field: "name", title: "តំបន់",
			    			groupHeaderTemplate: "#=company_name#"
			    		},
			    		{ field: "deposits", title: "ប្រាក់កក់", 
			    			template: "#=kendo.toString(deposits, 'c', 'km-KH')#",
			    			groupFooterTemplate: "សរុប: #=kendo.toString(sum, 'c', 'km-KH')#",
			    			footerTemplate: "សរុបទាំងអស់: #=kendo.toString(sum, 'c', 'km-KH')#",	    				    			
				    		attributes: { style: "text-align: right;" },
				    		footerAttributes: { style: "text-align: right;" } 
			    		},
			    		{ field: "sales", title: "លក់", 
			    			template: "#=kendo.toString(sales, 'c', 'km-KH')#",
			    			groupFooterTemplate: "សរុប: #=kendo.toString(sum, 'c', 'km-KH')#",
			    			footerTemplate: "សរុបទាំងអស់: #=kendo.toString(sum, 'c', 'km-KH')#",	    				    			
				    		attributes: { style: "text-align: right;" },
				    		footerAttributes: { style: "text-align: right;" } 
			    		},			    		
			    		{ field: "payments", title: "ប្រាក់ទទួលបាន", 
			    			template: "#=kendo.toString(payments, 'c', 'km-KH')#",			    			
			    			groupFooterTemplate: "សរុប: #=kendo.toString(sum, 'c', 'km-KH')#",
			    			footerTemplate: "សរុបទាំងអស់: #=kendo.toString(sum, 'c', 'km-KH')#",	    				    			
				    		attributes: { style: "text-align: right;" },
				    		footerAttributes: { style: "text-align: right;" }			    			
				    	} 		    		
				    ]
				});

				$("#search").click(function(e){
		        	e.preventDefault();

		        	var start = sdate.value(),
		        		end = edate.value(),		        		
		        		para = Array();

		        	//Dates
		        	if(start && end){
		            	para.push({ field:"payment_date >=", value: kendo.toString(start, "yyyy-MM-dd") });
		            	para.push({ field:"payment_date <=", value: kendo.toString(end, "yyyy-MM-dd") });            	            	
		            }else if(start){
		            	para.push({ field:"payment_date", value: kendo.toString(start, "yyyy-MM-dd") });
		            }else if(end){
		            	para.push({ field:"payment_date <=", value: kendo.toString(end, "yyyy-MM-dd") });
		            }else{
		            	
		            }

		            paymentDS.filter(para);		    		
				});
			}
		}
	});
	banhji.router.route("/payment_detail", function(){
		if(!auth.getLogin()){
			banhji.router.navigate('/login');
		}else{
			banhji.view.layout.showIn("#content", banhji.view.paymentDetail);
			kendo.fx($("#slide-form")).slideIn("down").play();			
			
			if(banhji.pageLoaded["payment_detail"]==undefined){
				banhji.pageLoaded["payment_detail"] = true;		

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

				var cashiers = $("#cashiers").kendoDropDownList({
					optionLabel: "(--- រើស​ បេឡាករ ---)",            
		            dataTextField: "name",
		            dataValueField: "id",
		            dataSource: dataStore(baseUrl + "contacts/employee"),
		            change: function(e){
		            	var value = this.value();

		            	if(value){
		            		$("#lblCashier").text("ដោយ " + this.text());
		            	}else{
		            		$("#lblCashier").text("");
		            	}
		            }
		        }).data("kendoDropDownList");

				function dateChanges() {
		            var start = sdate.value(),
		            	end = edate.value();

		            if(start && end){
		            	$("#lblStartDate").text("ចាប់ពី " + kendo.toString(start, "dd-MM-yyyy"));
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

				var paymentDS = new kendo.data.DataSource({
					transport: {
						read 	: {
							url: baseUrl + "payments/detail",
							type: "GET",
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
									page: options.page,
									sort: options.sort,
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
					serverFiltering: true,
					serverPaging: true,					
					page: 1,
					pageSize: 50
				});	

				$("#grid").kendoGrid({
				    dataSource: paymentDS,		    	    
				    autoBind: false,
				    pageable: true,
				    sortable: true,		                           
				    columns: [
				    	{ field: "payment_date", title: "ថ្ងៃបង់ប្រាក់", 
				    		template:"#=kendo.toString(new Date(payment_date), 'dd-MM-yyyy')#" 
				    	},	    		
			    		{ field: "fullIdName", title: "ឈ្មោះ" },    			
			    		{ field: "type", title: "ប្រភេទ",
			    			template: kendo.template($("#payment-type-template").html())
			    		},
			    		{ field: "invoice_number", title: "លេខវិក្កយ." },
			    		{ field: "amount", title: "ទឹកប្រាក់", 
			    			template: "#=kendo.toString(amount/rate, 'c0', locale)#",    				    				    			
				    		attributes: { style: "text-align: right;" }
				    	} 		    		
				    ]
				});					

		        $("#search").click(function(e){
		        	e.preventDefault();

		        	var start = sdate.value(),
		        		end = edate.value(),
		        		cashier = cashiers.value(),
		        		para = Array();

		        	//Dates
		        	if(start && end){
		            	para.push({ field:"payment_date >=", value: kendo.toString(start, "yyyy-MM-dd") });
		            	para.push({ field:"payment_date <=", value: kendo.toString(end, "yyyy-MM-dd") });            	            	
		            }else if(start){
		            	para.push({ field:"payment_date", value: kendo.toString(start, "yyyy-MM-dd") });
		            }else if(end){
		            	para.push({ field:"payment_date <=", value: kendo.toString(end, "yyyy-MM-dd") });
		            }else{
		            	
		            }

		            //Cashier
		        	if(cashier){        		
		        		para.push({ field:"cashier", value: cashier });
		        	}
		        	
		    		paymentDS.query({
		    			filter: para,
		    			page: 1,
		    			pageSize: 50
		    		}).then(function(e){
		    			var total = 0,
		    				deposit = 0, 
		    				view = paymentDS.view();

		    			$.each(view, function(index, value){
		    				if(value.type=="deposit"){
		    					deposit += value.amount;
		    				}

		    				total += value.amount;
		    			});

		    			$("#deposit").text(kendo.toString(deposit, "c0", "km-KH"));
		    			$("#total").text(kendo.toString(total, "c0", "km-KH"));
		    		});        	
				});
			}
		}
	});
	banhji.router.route("/print_default_template", function(){
		banhji.view.layout.showIn("#content", banhji.view.printDefaultTemplate);
		
		kendo.pdf.defineFont({
		    "Battambang"       : "/banhji/resources/fonts/Battambang-Regular.ttf", // this is a URL
		    "Battambang|Bold"  : "/banhji/resources/fonts/Battambang-Bold.ttf"
		});

		
		var drawing = kendo.drawing;
		var geo = kendo.geometry;

		// this will contain all our drawing
		var group = new drawing.Group();

		// draw a circle
		var circleGeometry = new geo.Circle([ 100, 100 ], 50);
		var circle = new drawing.Circle(circleGeometry).stroke("red", 1);

		// and add it to the group
		group.append(circle);

		// add some text
		var text = new drawing.Text("ស្រុកកៀនស្វាយ", new geo.Point(100, 200));
		text.options.set("font", "16pt Battambang");
		group.append(text);

		// set PDF arguments (optional, see the "PDF options" section below)
		group.options.set("pdf", {
		    paperSize: "A4",
		    margin: {
		        left   : "20mm",
		        top    : "40mm",
		        right  : "20mm",
		        bottom : "40mm"
		    }
		});		

	 	$("#expdf").click(function(e){
	 		e.preventDefault();

			// you can offer the file for download now
			drawing.pdf.saveAs(group, "filename.pdf");
		});		

	});
	banhji.router.route("/rInvoice_print", function(){
		if(!auth.getLogin()){
			banhji.router.navigate('/login');
		}else{
			banhji.view.layout.showIn("#content", banhji.view.rInvoicePrint);
			kendo.fx($("#slide-form")).slideIn("down").play();			
		}
	});		
	//END OF DAWINE  ---------------------------------------------------------------------------------
	$(function() {	
		if(!getDB()) {
			console.log('please user \"entity=company\"');
		} else {
			banhji.router.start();
		}
	});
</script>
