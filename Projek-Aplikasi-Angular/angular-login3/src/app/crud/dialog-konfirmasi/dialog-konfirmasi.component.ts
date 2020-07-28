import { Component, OnInit } from '@angular/core';
import {MatDialog, MatDialogRef, MAT_DIALOG_DATA} from '@angular/material/dialog';

@Component({
  selector: 'app-dialog-konfirmasi',
  templateUrl: './dialog-konfirmasi.component.html',
  styleUrls: ['./dialog-konfirmasi.component.css']
})

export class DialogKonfirmasiComponent{
	
 
  constructor(
  public dialogRef:MatDialogRef<DialogKonfirmasiComponent>
  ) {}

  ngOnInit(): void {
  }
  
konfirmasi() : void 
  {
    	this.dialogRef.close(true);
  }
 
}