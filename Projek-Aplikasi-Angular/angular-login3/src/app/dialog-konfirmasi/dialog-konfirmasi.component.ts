import { Component, OnInit } from '@angular/core';
import {MatDialog, MatDialogRef, MAT_DIALOG_DATA} from '@angular/material/dialog';
import { AccountService, AlertService } from '@app/_services';

@Component({
  selector: 'app-dialog-konfirmasi',
  templateUrl: './dialog-konfirmasi.component.html',
  styleUrls: ['./dialog-konfirmasi.component.css']
})

export class DialogKonfirmasiComponent{


  constructor(
    public alertService: AlertService,
  public dialogRef:MatDialogRef<DialogKonfirmasiComponent>
  ) {}

  ngOnInit(): void {
  }

konfirmasi() : void
  {
      this.dialogRef.close(true);
      this.alertService.success('Hapus Data Berhasil!!!', { keepAfterRouteChange: true });
  }

}
