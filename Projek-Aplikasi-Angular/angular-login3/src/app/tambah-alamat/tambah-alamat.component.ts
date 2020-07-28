import { Component, OnInit, Inject } from '@angular/core';
import { MatDialogRef, MAT_DIALOG_DATA} from '@angular/material/dialog';
import { AccountService, AlertService } from '@app/_services';
import {ApiService} from '../api.service';
@Component({
  selector: 'app-tambah-alamat',
  templateUrl: './tambah-alamat.component.html',
  styleUrls: ['./tambah-alamat.component.css']
})
export class TambahAlamatComponent implements OnInit {
  data:any={};
  constructor(
    public api:ApiService,
    public dialogRef:MatDialogRef<TambahAlamatComponent>,
    public alertService: AlertService,
    @Inject(MAT_DIALOG_DATA) public itemData:any
    )
    {
      if(itemData != null)
      {
        this.data=itemData;
      }
    }
  ngOnInit() {}
  simpan(data)
  { console.log(data);
    if(data.id == undefined)
    {
      this.api.simpan(data).subscribe(res=>{
        this.dialogRef.close(true);
        this.alertService.success('Tambah Data Berhasil!!!', { keepAfterRouteChange: true });
      });
    }else{
      this.api.ubah(data).subscribe(res=>{
        this.dialogRef.close(true);
        this.alertService.success('Update Data Berhasil!!!', { keepAfterRouteChange: true });
      })
    }
  }
}
