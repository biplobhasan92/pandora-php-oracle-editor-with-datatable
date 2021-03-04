<div class="container">
	<div class="row">
		<div class="col-md-10">
			<h1 class="text-center"> Metro UI number of Order chart</h1>
		</div>
		<div class="col-md-2">						
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
			<ul data-app-bar="true" data-role="materialtabs" data-fixed-tabs="true">
			    <li><a href="#ord2019">2019</a></li>
			    <li class="active"><a href="#ord2020">2020</a></li>
			    <li><a href="#ord2021">2021</a></li>
			</ul>
		</div>
	</div>
</div>


<div class="container">
	<div style="margin-top: 112px">

	    <div id="ord2019">
	    	<div data-role="panel" data-title-caption="Total Order at a glance" data-collapsible="true" data-title-icon="<span class='mif-chart-line'></span>" class="mt-4">
			    <div class="row">
			        <div class="cell-md-6 p-10">
			            <h5 class="text-center">Sales: 1 Jan, 2019 - 30 Dec, 2019</h5>
			            <canvas id="myChart19" width="50" height="50"></canvas>
			        </div>
			        <div class="cell-md-6 p-10">
			            <h5 class="text-center">Goal Completion</h5>
			            <div class="mt-6">
			                <div class="clear">
			                    <div class="place-left">Total Order</div>
			                    <div class="place-right"><strong>510</strong></div>
			                </div>
			                <div data-role="progress" data-value="35" data-cls-bar="bg-red"></div>
			            </div>
			            <div class="mt-6">
			                <div class="clear">
			                    <div class="place-left">Completed Order</div>
			                    <div class="place-right"><strong>505</strong></div>
			                </div>
			                <div data-role="progress" data-value="35" data-cls-bar="bg-cyan"></div>
			            </div>
			            <div class="mt-6">
			                
			            </div>
			        </div>
			    </div>

			    <hr>

			    <div class="row">
			        <div class="cell-lg-3 cell-sm-6 text-center mt-4">
			            <div class="fg-green"><span class="mif-arrow-drop-up"></span>17%</div>
			            <div class="text-bold">$35,210.43</div>
			            <div class="text-upper">TOTAL REVENUE</div>
			        </div>
			        <div class="cell-lg-3 cell-sm-6 text-center mt-4">
			            <div class="fg-orange"><span class="">=</span>0</div>
			            <div class="text-bold">$10,390.90</div>
			            <div class="text-upper">TOTAL COST</div>
			        </div>
			        <div class="cell-lg-3 cell-sm-6 text-center mt-4">
			            <div class="fg-green"><span class="mif-arrow-drop-up"></span>20%</div>
			            <div class="text-bold">$24,813.53</div>
			            <div class="text-upper">TOTAL PROFIT</div>
			        </div>
			        <div class="cell-lg-3 cell-sm-6 text-center mt-4">
			            <div class="fg-red"><span class="mif-arrow-drop-down"></span>18%</div>
			            <div class="text-bold">1,200</div>
			            <div class="text-upper">GOAL COMPLETIONS</div>
			        </div>
			    </div>
			</div>
			
			<br>

			<div data-role="panel" data-title-caption="Monthly bar chart of Total order 2019" data-collapsible="true" data-title-icon="<span class='mif-chart-line'></span>" class="mt-4">
			    <div class="row">
			        <div class="cell-md-6 p-10">
			            <h5 class="text-center">Sales: 1 Jan, 2019 - 30 Dec, 2019</h5>
			            <canvas id="monthlyBar19" width="50" height="50"></canvas>
			        </div>
			        <div class="cell-md-6 p-10">
			            <h5 class="text-center">Goal Completion</h5>
			            <div class="mt-6">
			                <div class="clear">
			                    <div class="place-left">Total Order</div>
			                    <div class="place-right"><strong>510</strong></div>
			                </div>
			                <div data-role="progress" data-value="35" data-cls-bar="bg-red"></div>
			            </div>
			            <div class="mt-6">
			                <div class="clear">
			                    <div class="place-left">Completed Order</div>
			                    <div class="place-right"><strong>505</strong></div>
			                </div>
			                <div data-role="progress" data-value="35" data-cls-bar="bg-cyan"></div>
			            </div>
			            <div class="mt-6">
			                
			                
			            </div>
			        </div>
			    </div>

			    <hr>

			    <div class="row">
			        <div class="cell-lg-3 cell-sm-6 text-center mt-4">
			            <div class="fg-green"><span class="mif-arrow-drop-up"></span>17%</div>
			            <div class="text-bold">$35,210.43</div>
			            <div class="text-upper">TOTAL REVENUE</div>
			        </div>
			        <div class="cell-lg-3 cell-sm-6 text-center mt-4">
			            <div class="fg-orange"><span class="">=</span>0</div>
			            <div class="text-bold">$10,390.90</div>
			            <div class="text-upper">TOTAL COST</div>
			        </div>
			        <div class="cell-lg-3 cell-sm-6 text-center mt-4">
			            <div class="fg-green"><span class="mif-arrow-drop-up"></span>20%</div>
			            <div class="text-bold">$24,813.53</div>
			            <div class="text-upper">TOTAL PROFIT</div>
			        </div>
			        <div class="cell-lg-3 cell-sm-6 text-center mt-4">
			            <div class="fg-red"><span class="mif-arrow-drop-down"></span>18%</div>
			            <div class="text-bold">1,200</div>
			            <div class="text-upper">GOAL COMPLETIONS</div>
			        </div>
			    </div>
			</div>

			<br/>

			<div data-role="panel" data-title-caption="Monthly pie chart of Total order 2019" data-collapsible="true" data-title-icon="<span class='mif-chart-line'></span>" class="mt-4">
			    <div class="row">
			        <div class="cell-md-6 p-10">
			            <h5 class="text-center">Sales: 1 Jan, 2019 - 30 Dec, 2019</h5>
			            <canvas id="monthlyPie19" width="50" height="50"></canvas>
			        </div>
			        <div class="cell-md-6 p-10">
			            <h5 class="text-center">Goal Completion</h5>
			            <div class="mt-6">
			                <div class="clear">
			                    <div class="place-left">Total Order</div>
			                    <div class="place-right"><strong>510</strong></div>
			                </div>
			                <div data-role="progress" data-value="35" data-cls-bar="bg-red"></div>
			            </div>
			            <div class="mt-6">
			                <div class="clear">
			                    <div class="place-left">Completed Order</div>
			                    <div class="place-right"><strong>505</strong></div>
			                </div>
			                <div data-role="progress" data-value="35" data-cls-bar="bg-cyan"></div>
			            </div>
			            <div class="mt-6">
			                <p class="text-small">Cum brodium resistere, omnes spatiies perdere varius, magnum lanistaes.</p>
			            </div>
			        </div>
			    </div>

			    <hr>

			    <div class="row">
			        <div class="cell-lg-3 cell-sm-6 text-center mt-4">
			            <div class="fg-green"><span class="mif-arrow-drop-up"></span>17%</div>
			            <div class="text-bold">$35,210.43</div>
			            <div class="text-upper">TOTAL REVENUE</div>
			        </div>
			        <div class="cell-lg-3 cell-sm-6 text-center mt-4">
			            <div class="fg-orange"><span class="">=</span>0</div>
			            <div class="text-bold">$10,390.90</div>
			            <div class="text-upper">TOTAL COST</div>
			        </div>
			        <div class="cell-lg-3 cell-sm-6 text-center mt-4">
			            <div class="fg-green"><span class="mif-arrow-drop-up"></span>20%</div>
			            <div class="text-bold">$24,813.53</div>
			            <div class="text-upper">TOTAL PROFIT</div>
			        </div>
			        <div class="cell-lg-3 cell-sm-6 text-center mt-4">
			            <div class="fg-red"><span class="mif-arrow-drop-down"></span>18%</div>
			            <div class="text-bold">1,200</div>
			            <div class="text-upper">GOAL COMPLETIONS</div>
			        </div>
			    </div>
			</div>

			<br/>

			<div data-role="panel" data-title-caption="Monthly line chart of Total order 2019" data-collapsible="true" data-title-icon="<span class='mif-chart-line'></span>" class="mt-4">
			    <div class="row">
			        <div class="cell-md-6 p-10">
			            <h5 class="text-center">Sales: 1 Jan, 2019 - 30 Dec, 2019</h5>
			            <canvas id="monthlyLine19" width="50" height="50"></canvas>
			        </div>
			        <div class="cell-md-6 p-10">
			            <h5 class="text-center">Goal Completion</h5>
			            <div class="mt-6">
			                <div class="clear">
			                    <div class="place-left">Total Order</div>
			                    <div class="place-right"><strong>510</strong></div>
			                </div>
			                <div data-role="progress" data-value="35" data-cls-bar="bg-red"></div>
			            </div>
			            <div class="mt-6">
			                <div class="clear">
			                    <div class="place-left">Completed Order</div>
			                    <div class="place-right"><strong>505</strong></div>
			                </div>
			                <div data-role="progress" data-value="35" data-cls-bar="bg-cyan"></div>
			            </div>
			            <div class="mt-6">
			                <p class="text-small">Cum brodium resistere, omnes spatiies perdere varius, magnum lanistaes.</p>
			            </div>
			        </div>
			    </div>

			    <hr>

			    <div class="row">
			        <div class="cell-lg-3 cell-sm-6 text-center mt-4">
			            <div class="fg-green"><span class="mif-arrow-drop-up"></span>17%</div>
			            <div class="text-bold">$35,210.43</div>
			            <div class="text-upper">TOTAL REVENUE</div>
			        </div>
			        <div class="cell-lg-3 cell-sm-6 text-center mt-4">
			            <div class="fg-orange"><span class="">=</span>0</div>
			            <div class="text-bold">$10,390.90</div>
			            <div class="text-upper">TOTAL COST</div>
			        </div>
			        <div class="cell-lg-3 cell-sm-6 text-center mt-4">
			            <div class="fg-green"><span class="mif-arrow-drop-up"></span>20%</div>
			            <div class="text-bold">$24,813.53</div>
			            <div class="text-upper">TOTAL PROFIT</div>
			        </div>
			        <div class="cell-lg-3 cell-sm-6 text-center mt-4">
			            <div class="fg-red"><span class="mif-arrow-drop-down"></span>18%</div>
			            <div class="text-bold">1,200</div>
			            <div class="text-upper">GOAL COMPLETIONS</div>
			        </div>
			    </div>
			</div>
	    </div>

	    <div id="ord2020">	    	
	    	<div data-role="panel" data-title-caption="Total Order at a glance" data-collapsible="true" data-title-icon="<span class='mif-chart-line'></span>" class="mt-4">
			    <div class="row">
			        <div class="cell-md-6 p-10">
			            <h5 class="text-center">Sales: 1 Jan, 2020 - 30 Dec, 2020</h5>
			            <canvas id="myChart" width="50" height="50"></canvas>
			        </div>
			        <div class="cell-md-6 p-10">
			            <h5 class="text-center">Goal Completion</h5>
			            <div class="mt-6">
			                <div class="clear">
			                    <div class="place-left">Total Order</div>
			                    <div class="place-right"><strong>780</strong></div>
			                </div>
			                <div data-role="progress" data-value="35" data-cls-bar="bg-red"></div>
			            </div>
			            <div class="mt-6">
			                <div class="clear">
			                    <div class="place-left">Completed Order</div>
			                    <div class="place-right"><strong>610</strong></div>
			                </div>
			                <div data-role="progress" data-value="35" data-cls-bar="bg-cyan"></div>
			            </div>
			            <div class="mt-6">
			                <p class="text-small">Cum brodium resistere, omnes spatiies perdere varius, magnum lanistaes.</p>
			            </div>
			        </div>
			    </div>

			    <hr>

			    <div class="row">
			        <div class="cell-lg-3 cell-sm-6 text-center mt-4">
			            <div class="fg-green"><span class="mif-arrow-drop-up"></span>17%</div>
			            <div class="text-bold">$35,210.43</div>
			            <div class="text-upper">TOTAL REVENUE</div>
			        </div>
			        <div class="cell-lg-3 cell-sm-6 text-center mt-4">
			            <div class="fg-orange"><span class="">=</span>0</div>
			            <div class="text-bold">$10,390.90</div>
			            <div class="text-upper">TOTAL COST</div>
			        </div>
			        <div class="cell-lg-3 cell-sm-6 text-center mt-4">
			            <div class="fg-green"><span class="mif-arrow-drop-up"></span>20%</div>
			            <div class="text-bold">$24,813.53</div>
			            <div class="text-upper">TOTAL PROFIT</div>
			        </div>
			        <div class="cell-lg-3 cell-sm-6 text-center mt-4">
			            <div class="fg-red"><span class="mif-arrow-drop-down"></span>18%</div>
			            <div class="text-bold">1,200</div>
			            <div class="text-upper">GOAL COMPLETIONS</div>
			        </div>
			    </div>
			</div>

			<div data-role="panel" data-title-caption="Monthly Report of order received bar chart" data-collapsible="true" data-title-icon="<span class='mif-chart-line'></span>" class="mt-4">
			    <div class="row">
			        <div class="cell-md-6 p-10">
			            <h5 class="text-center">Sales: 1 Jan, 2020 - 30 Dec, 2020</h5>
			            <canvas id="chart2020" width="50" height="50"></canvas>
			        </div>
			        <div class="cell-md-6 p-10">
			            <h5 class="text-center">Goal Completion</h5>
			            <div class="mt-6">
			                <div class="clear">
			                    <div class="place-left">Total Order</div>
			                    <div class="place-right"><strong>780</strong></div>
			                </div>
			                <div data-role="progress" data-value="35" data-cls-bar="bg-red"></div>
			            </div>
			            <div class="mt-6">
			                <div class="clear">
			                    <div class="place-left">Completed Order</div>
			                    <div class="place-right"><strong>610</strong></div>
			                </div>
			                <div data-role="progress" data-value="35" data-cls-bar="bg-cyan"></div>
			            </div>
			            <div class="mt-6">
			                <p class="text-small">Cum brodium resistere, omnes spatiies perdere varius, magnum lanistaes.</p>
			            </div>
			        </div>
			    </div>

			    <hr>

			    <div class="row">
			        <div class="cell-lg-3 cell-sm-6 text-center mt-4">
			            <div class="fg-green"><span class="mif-arrow-drop-up"></span>17%</div>
			            <div class="text-bold">$35,210.43</div>
			            <div class="text-upper">TOTAL REVENUE</div>
			        </div>
			        <div class="cell-lg-3 cell-sm-6 text-center mt-4">
			            <div class="fg-orange"><span class="">=</span>0</div>
			            <div class="text-bold">$10,390.90</div>
			            <div class="text-upper">TOTAL COST</div>
			        </div>
			        <div class="cell-lg-3 cell-sm-6 text-center mt-4">
			            <div class="fg-green"><span class="mif-arrow-drop-up"></span>20%</div>
			            <div class="text-bold">$24,813.53</div>
			            <div class="text-upper">TOTAL PROFIT</div>
			        </div>
			        <div class="cell-lg-3 cell-sm-6 text-center mt-4">
			            <div class="fg-red"><span class="mif-arrow-drop-down"></span>18%</div>
			            <div class="text-bold">1,200</div>
			            <div class="text-upper">GOAL COMPLETIONS</div>
			        </div>
			    </div>
			</div>


			<div data-role="panel" data-title-caption="Monthly Report of order received line chart" data-collapsible="true" data-title-icon="<span class='mif-chart-line'></span>" class="mt-4">
			    <div class="row">
			        <div class="cell-md-6 p-10">
			            <h5 class="text-center">Sales: 1 Jan, 2020 - 30 Dec, 2020</h5>
			            <canvas id="chart2020line" width="50" height="50"></canvas>
			        </div>
			        <div class="cell-md-6 p-10">
			            <h5 class="text-center">Goal Completion</h5>
			            <div class="mt-6">
			                <div class="clear">
			                    <div class="place-left">Total Order</div>
			                    <div class="place-right"><strong>780</strong></div>
			                </div>
			                <div data-role="progress" data-value="35" data-cls-bar="bg-red"></div>
			            </div>
			            <div class="mt-6">
			                <div class="clear">
			                    <div class="place-left">Completed Order</div>
			                    <div class="place-right"><strong>610</strong></div>
			                </div>
			                <div data-role="progress" data-value="35" data-cls-bar="bg-cyan"></div>
			            </div>
			            <div class="mt-6">
			                <p class="text-small">Cum brodium resistere, omnes spatiies perdere varius, magnum lanistaes.</p>
			            </div>
			        </div>
			    </div>

			    <hr>

			    <div class="row">
			        <div class="cell-lg-3 cell-sm-6 text-center mt-4">
			            <div class="fg-green"><span class="mif-arrow-drop-up"></span>17%</div>
			            <div class="text-bold">$35,210.43</div>
			            <div class="text-upper">TOTAL REVENUE</div>
			        </div>
			        <div class="cell-lg-3 cell-sm-6 text-center mt-4">
			            <div class="fg-orange"><span class="">=</span>0</div>
			            <div class="text-bold">$10,390.90</div>
			            <div class="text-upper">TOTAL COST</div>
			        </div>
			        <div class="cell-lg-3 cell-sm-6 text-center mt-4">
			            <div class="fg-green"><span class="mif-arrow-drop-up"></span>20%</div>
			            <div class="text-bold">$24,813.53</div>
			            <div class="text-upper">TOTAL PROFIT</div>
			        </div>
			        <div class="cell-lg-3 cell-sm-6 text-center mt-4">
			            <div class="fg-red"><span class="mif-arrow-drop-down"></span>18%</div>
			            <div class="text-bold">1,200</div>
			            <div class="text-upper">GOAL COMPLETIONS</div>
			        </div>
			    </div>
			</div>



			<div data-role="panel" data-title-caption="Monthly Report of order received pie chart" data-collapsible="true" data-title-icon="<span class='mif-chart-line'></span>" class="mt-4">
			    <div class="row">
			        <div class="cell-md-6 p-10">
			            <h5 class="text-center">Sales: 1 Jan, 2020 - 30 Dec, 2020</h5>
			            <canvas id="chart2020pie" width="50" height="50"></canvas>
			        </div>
			        <div class="cell-md-6 p-10">
			            <h5 class="text-center">Goal Completion</h5>
			            <div class="mt-6">
			                <div class="clear">
			                    <div class="place-left">Total Order</div>
			                    <div class="place-right"><strong>780</strong></div>
			                </div>
			                <div data-role="progress" data-value="35" data-cls-bar="bg-red"></div>
			            </div>
			            <div class="mt-6">
			                <div class="clear">
			                    <div class="place-left">Completed Order</div>
			                    <div class="place-right"><strong>610</strong></div>
			                </div>
			                <div data-role="progress" data-value="35" data-cls-bar="bg-cyan"></div>
			            </div>
			            <div class="mt-6">			               
			            </div>
			        </div>
			    </div>

			    <hr>

			    <div class="row">
			        <div class="cell-lg-3 cell-sm-6 text-center mt-4">
			            <div class="fg-green"><span class="mif-arrow-drop-up"></span>17%</div>
			            <div class="text-bold">$35,210.43</div>
			            <div class="text-upper">TOTAL REVENUE</div>
			        </div>
			        <div class="cell-lg-3 cell-sm-6 text-center mt-4">
			            <div class="fg-orange"><span class="">=</span>0</div>
			            <div class="text-bold">$10,390.90</div>
			            <div class="text-upper">TOTAL COST</div>
			        </div>
			        <div class="cell-lg-3 cell-sm-6 text-center mt-4">
			            <div class="fg-green"><span class="mif-arrow-drop-up"></span>20%</div>
			            <div class="text-bold">$24,813.53</div>
			            <div class="text-upper">TOTAL PROFIT</div>
			        </div>
			        <div class="cell-lg-3 cell-sm-6 text-center mt-4">
			            <div class="fg-red"><span class="mif-arrow-drop-down"></span>18%</div>
			            <div class="text-bold">1,200</div>
			            <div class="text-upper">GOAL COMPLETIONS</div>
			        </div>
			    </div>
			</div>

	    </div>

	    <div id="ord2021">
	    	<div data-role="panel" data-title-caption="Total Order of 2021" data-collapsible="true" data-title-icon="<span class='mif-chart-line'></span>" class="mt-4">
			    
			    <div class="row">
			        <div class="cell-md-6 p-10">
			            <h5 class="text-center">Sales: 1 Jan, 2014 - 30 Jul, 2014</h5>
			            <canvas id="total2021" width="50" height="50"></canvas>
			        </div>
			        <div class="cell-md-6 p-10">
			            <h5 class="text-center">Goal Completion</h5>
			            <div class="mt-6">
			                <div class="clear">
			                    <div class="place-left"> Total Order </div>
			                    <div class="place-right">
			                    	<strong>160</strong>
			                    </div>
			                </div>
			                <div data-role="progress" data-value="35" data-cls-bar="bg-cyan"></div>
			            </div>
			            <div class="mt-6">
			                <div class="clear">
			                    <div class="place-left">Complete Purchase</div>
			                    <div class="place-right"><strong>310</strong></div>
			                </div>
			                <div data-role="progress" data-value="35" data-cls-bar="bg-red"></div>
			            </div>
			            <div class="mt-6"></div>
			        </div>
			    </div>

			    <hr>

			    <div class="row">
			        <div class="cell-lg-3 cell-sm-6 text-center mt-4">
			            <div class="fg-green"><span class="mif-arrow-drop-up"></span>17%</div>
			            <div class="text-bold">$35,210.43</div>
			            <div class="text-upper">TOTAL REVENUE</div>
			        </div>
			        <div class="cell-lg-3 cell-sm-6 text-center mt-4">
			            <div class="fg-orange"><span class="">=</span>0</div>
			            <div class="text-bold">$10,390.90</div>
			            <div class="text-upper">TOTAL COST</div>
			        </div>
			        <div class="cell-lg-3 cell-sm-6 text-center mt-4">
			            <div class="fg-green"><span class="mif-arrow-drop-up"></span>20%</div>
			            <div class="text-bold">$24,813.53</div>
			            <div class="text-upper">TOTAL PROFIT</div>
			        </div>
			        <div class="cell-lg-3 cell-sm-6 text-center mt-4">
			            <div class="fg-red"><span class="mif-arrow-drop-down"></span>18%</div>
			            <div class="text-bold">1,200</div>
			            <div class="text-upper">GOAL COMPLETIONS</div>
			        </div>
			    </div>
			</div>

			<div data-role="panel" data-title-caption="Monthly Report of order received bar chart" data-collapsible="true" data-title-icon="<span class='mif-chart-line'></span>" class="mt-4">
			    <div class="row">
			        <div class="cell-md-6 p-10">
			            <h5 class="text-center">Sales: 1 Jan, 2021 - 31 Dec, 2021</h5>
			            <canvas id="monthlyBar2021" width="50" height="50"></canvas>
			        </div>
			        <div class="cell-md-6 p-10">
			            <h5 class="text-center">Goal Completion</h5>
			            <div class="mt-6">
			                <div class="clear">
			                    <div class="place-left"> Total Order </div>
			                    <div class="place-right">
			                    	<strong>160</strong>
			                    </div>
			                </div>
			                <div data-role="progress" data-value="35" data-cls-bar="bg-cyan"></div>
			            </div>
			            <div class="mt-6">
			                <div class="clear">
			                    <div class="place-left">Completed</div>
			                    <div class="place-right"><strong>150</strong></div>
			                </div>
			                <div data-role="progress" data-value="35" data-cls-bar="bg-red"></div>
			            </div>
			            <div class="mt-6">
			            	
			            </div>
			        </div>
			    </div>

			    <hr>

			    <div class="row">
			        <div class="cell-lg-3 cell-sm-6 text-center mt-4">
			            <div class="fg-green"><span class="mif-arrow-drop-up"></span>17%</div>
			            <div class="text-bold">$35,210.43</div>
			            <div class="text-upper">TOTAL REVENUE</div>
			        </div>
			        <div class="cell-lg-3 cell-sm-6 text-center mt-4">
			            <div class="fg-orange"><span class="">=</span>0</div>
			            <div class="text-bold">$10,390.90</div>
			            <div class="text-upper">TOTAL COST</div>
			        </div>
			        <div class="cell-lg-3 cell-sm-6 text-center mt-4">
			            <div class="fg-green"><span class="mif-arrow-drop-up"></span>20%</div>
			            <div class="text-bold">$24,813.53</div>
			            <div class="text-upper">TOTAL PROFIT</div>
			        </div>
			        <div class="cell-lg-3 cell-sm-6 text-center mt-4">
			            <div class="fg-red"><span class="mif-arrow-drop-down"></span>18%</div>
			            <div class="text-bold">1,200</div>
			            <div class="text-upper">GOAL COMPLETIONS</div>
			        </div>
			    </div>
			</div>

			<div data-role="panel" data-title-caption="Monthly Report of order received line chart" data-collapsible="true" data-title-icon="<span class='mif-chart-line'></span>" class="mt-4">
			    <div class="row">
			        <div class="cell-md-6 p-10">
			            <h5 class="text-center">Sales: 1 Jan, 2021 - 31 Dec, 2021</h5>
			            <canvas id="monthlyLine2021" width="50" height="50"></canvas>
			        </div>
			        <div class="cell-md-6 p-10">
			            <h5 class="text-center">Goal Completion</h5>
			            <div class="mt-6">
			                <div class="clear">
			                    <div class="place-left"> Total Order </div>
			                    <div class="place-right">
			                    	<strong>160</strong>
			                    </div>
			                </div>
			                <div data-role="progress" data-value="35" data-cls-bar="bg-cyan"></div>
			            </div>
			            <div class="mt-6">
			                <div class="clear">
			                    <div class="place-left">Completed</div>
			                    <div class="place-right"><strong>150</strong></div>
			                </div>
			                <div data-role="progress" data-value="35" data-cls-bar="bg-red"></div>
			            </div>
			            <div class="mt-6">
			            	
			            </div>
			        </div>
			    </div>

			    <hr>

			    <div class="row">
			        <div class="cell-lg-3 cell-sm-6 text-center mt-4">
			            <div class="fg-green"><span class="mif-arrow-drop-up"></span>17%</div>
			            <div class="text-bold">$35,210.43</div>
			            <div class="text-upper">TOTAL REVENUE</div>
			        </div>
			        <div class="cell-lg-3 cell-sm-6 text-center mt-4">
			            <div class="fg-orange"><span class="">=</span>0</div>
			            <div class="text-bold">$10,390.90</div>
			            <div class="text-upper">TOTAL COST</div>
			        </div>
			        <div class="cell-lg-3 cell-sm-6 text-center mt-4">
			            <div class="fg-green"><span class="mif-arrow-drop-up"></span>20%</div>
			            <div class="text-bold">$24,813.53</div>
			            <div class="text-upper">TOTAL PROFIT</div>
			        </div>
			        <div class="cell-lg-3 cell-sm-6 text-center mt-4">
			            <div class="fg-red"><span class="mif-arrow-drop-down"></span>18%</div>
			            <div class="text-bold">1,200</div>
			            <div class="text-upper">GOAL COMPLETIONS</div>
			        </div>
			    </div>
			</div>

			<div data-role="panel" data-title-caption="Monthly Report of order received line chart" data-collapsible="true" data-title-icon="<span class='mif-chart-line'></span>" class="mt-4">
			    <div class="row">
			        <div class="cell-md-6 p-10">
			            <h5 class="text-center">Sales: 1 Jan, 2021 - 31 Dec, 2021</h5>
			            <canvas id="monthlyPie2021" width="50" height="50"></canvas>
			        </div>
			        <div class="cell-md-6 p-10">
			            <h5 class="text-center">Goal Completion</h5>
			            <div class="mt-6">
			                <div class="clear">
			                    <div class="place-left"> Total Order </div>
			                    <div class="place-right">
			                    	<strong>160</strong>
			                    </div>
			                </div>
			                <div data-role="progress" data-value="35" data-cls-bar="bg-cyan"></div>
			            </div>
			            <div class="mt-6">
			                <div class="clear">
			                    <div class="place-left">Completed</div>
			                    <div class="place-right"><strong>150</strong></div>
			                </div>
			                <div data-role="progress" data-value="35" data-cls-bar="bg-red"></div>
			            </div>
			            <div class="mt-6">
			            	
			            </div>
			        </div>
			    </div>

			    <hr>

			    <div class="row">
			        <div class="cell-lg-3 cell-sm-6 text-center mt-4">
			            <div class="fg-green"><span class="mif-arrow-drop-up"></span>17%</div>
			            <div class="text-bold">$35,210.43</div>
			            <div class="text-upper">TOTAL REVENUE</div>
			        </div>
			        <div class="cell-lg-3 cell-sm-6 text-center mt-4">
			            <div class="fg-orange"><span class="">=</span>0</div>
			            <div class="text-bold">$10,390.90</div>
			            <div class="text-upper">TOTAL COST</div>
			        </div>
			        <div class="cell-lg-3 cell-sm-6 text-center mt-4">
			            <div class="fg-green"><span class="mif-arrow-drop-up"></span>20%</div>
			            <div class="text-bold">$24,813.53</div>
			            <div class="text-upper">TOTAL PROFIT</div>
			        </div>
			        <div class="cell-lg-3 cell-sm-6 text-center mt-4">
			            <div class="fg-red"><span class="mif-arrow-drop-down"></span>18%</div>
			            <div class="text-bold">1,200</div>
			            <div class="text-upper">GOAL COMPLETIONS</div>
			        </div>
			    </div>
			</div>
	    </div>
	</div>
	<script src="./js/charts.js"></script>
	<script src="./js/datatbl-form-js/orderimp.js"></script>
</div>