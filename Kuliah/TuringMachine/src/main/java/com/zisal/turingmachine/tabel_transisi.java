/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package com.zisal.turingmachine;

import javax.swing.table.AbstractTableModel;

/**
 *
 * @author fauzi
 */
public class tabel_transisi extends AbstractTableModel{
public Object [][]data;
public String [] namaKolom;
public tabel_transisi(String [] namaKolom, Object[][]data){
    this.namaKolom=namaKolom;
    this.data=data;
}
    @Override
    public int getRowCount() {
        return data.length;        
    }

    @Override
    public int getColumnCount() {
        return namaKolom.length;        
    }

    @Override
    public Object getValueAt(int rowIndex, int columnIndex) {
        return data[rowIndex][columnIndex];
    }
    public boolean isCellEditable(int rowIndex, int columnIndex){
        return true;
    }
    
}
