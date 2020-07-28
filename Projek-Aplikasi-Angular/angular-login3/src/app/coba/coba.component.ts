import { Component, OnInit } from '@angular/core';
import {MatDialog, MatDialogRef, MAT_DIALOG_DATA} from '@angular/material/dialog';
//import halaman dialog yang sudah dibuat pada tahap sebelumnya
import {TambahAlamatComponent} from '../tambah-alamat/tambah-alamat.component';
import {DetailAlamatComponent} from '../detail-alamat/detail-alamat.component';
import {DialogKonfirmasiComponent} from '../dialog-konfirmasi/dialog-konfirmasi.component';
import {ApiService} from './api.service';

@Component({
  selector: 'app-coba',
  templateUrl: './coba.component.html',
  styleUrls: ['./coba.component.less']
})
export class CobaComponent implements OnInit {

  constructor(
    public dialog:MatDialog,
    public api:ApiService

  )   {
    this.getData();
  }
  dataAlamat:any=[];
  getData()
  {
    this.api.baca().subscribe(res=>{
      this.dataAlamat=res;
    })
  }
   //fungsi untuk menampilkan dialog penambahan alamat baru
   buatAlamat()
   {
     const dialogRef = this.dialog.open(TambahAlamatComponent, {
       width: '450px',
       data:null
     });
     dialogRef.afterClosed().subscribe(result => {
       this.getData();
     });
   }

   detailAlamat(item)
   {
     const dialogRef = this.dialog.open(DetailAlamatComponent, {
       width: '450px',
       data:item // tambahan kode
     });
     dialogRef.afterClosed().subscribe(result => {
       console.log('The dialog was closed');
     });
   }

   konfirmasiHapus(id)
   {
     const dialogRef = this.dialog.open(DialogKonfirmasiComponent, {
       width: '450px',
     });
     dialogRef.afterClosed().subscribe(result => {
       if(result == true)
       {
         console.log('Menghapus data');
         this.api.hapus(id).subscribe(res=>{
           this.getData();
         })
       }
     });
   }

     editAlamat(data)
     {
       const dialogRef = this.dialog.open(TambahAlamatComponent, {
         width: '450px',
         data:data
       });
       dialogRef.afterClosed().subscribe(result => {
         this.getData();
       });
     }
  ngOnInit(): void {
  }

}
