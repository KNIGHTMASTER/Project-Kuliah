/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package com.zisal.fsaapplication2;

import javax.swing.JOptionPane;
import javax.swing.table.AbstractTableModel;

/**
 *
 * @author fauzi
 */
public class tabeldata extends AbstractTableModel{
private String[] colomnNames;
private Object [][] data;
    public tabeldata(Object [][] isinya, String[] namakolom){
        colomnNames=namakolom;
        for(int a=0;a<namakolom.length;a++){
            JOptionPane.showMessageDialog(null, "isi nama kolom dari tabel model= "+colomnNames[a]);
        }        
        data=isinya;        
    }
    @Override
    public int getRowCount() {
        return data.length;        
    }

    @Override
    public int getColumnCount() {
        return colomnNames.length;        
    }

    @Override
    public Object getValueAt(int rowIndex, int columnIndex) {
        return data[rowIndex][columnIndex];
    }
    public boolean isCellEditable(int rowIndex, int columnIndex){        
        return true;
    }
    public void isiCell(int rowIndex, int columnIndex){
        /*fireTableCellUpdated(rowIndex, columnIndex);
        fireTableDataChanged();        */
    
    }           
}
