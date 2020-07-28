
import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

const routes: Routes = [

	{
		path:'manager',
		loadChildren:'./manager/manager.module#ManagerModule'
	},
	{
		path:'',
		redirectTo:'login',
		pathMatch:'full'
  },
  {
		path:'',
		redirectTo:'registrasi',
		pathMatch:'full'
	}
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
