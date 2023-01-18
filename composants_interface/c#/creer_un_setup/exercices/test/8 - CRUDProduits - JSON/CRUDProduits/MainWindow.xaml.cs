
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows;
using System.Windows.Controls;
using System.Windows.Data;
using System.Windows.Documents;
using System.Windows.Input;
using System.Windows.Media;
using System.Windows.Media.Imaging;
using System.Windows.Navigation;
using System.Windows.Shapes;

namespace CRUDProduits
{
    /// <summary>
    /// Logique d'interaction pour MainWindow.xaml
    /// </summary>
    public partial class MainWindow : Window
    {
        public MainWindow()
        {
            InitializeComponent();
            RemplirGrid();
        }
        private void RemplirGrid()
        {
            listeProduits.ItemsSource = ProduitsService.ListProduits();
        }

        private void Row_DoubleClick(object sender, EventArgs e)
        {
           Produits item = (Produits) ((DataGridRow)sender).Item;

            Window w = new Detail(item, this);
            w.ShowDialog();
            RemplirGrid();
        }


    }
}
