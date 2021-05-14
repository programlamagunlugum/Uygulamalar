using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace atyarisi
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        int birinciatsoluzak, ikinciatsoluzak, ucuncuatsoluzak;
        Random rastgele = new Random();
        private void button1_Click(object sender, EventArgs e)
        {
            timer1.Enabled = true;
        }

        private void timer1_Tick(object sender, EventArgs e)
        {
            int birinciatgenisligi = pictureBox1.Width;
            int ikinciatgenisligi = pictureBox2.Width;
            int ucuncuatgenisligi = pictureBox3.Width;
            int bitisuzakligi = label5.Left;
            pictureBox1.Left = pictureBox1.Left + rastgele.Next(5, 15);
            pictureBox2.Left += rastgele.Next(5, 15);
            pictureBox3.Left += rastgele.Next(5, 15);

            if(pictureBox1.Left>pictureBox2.Left+5 && pictureBox1.Left>pictureBox3.Left+5)
            {
                label6.Text = "1 numaralı at yarışı önde götürüyor.";
            }

            if (pictureBox2.Left > pictureBox1.Left + 5 && pictureBox2.Left > pictureBox3.Left + 5)
            {
                label6.Text = "2 numaralı at iyi bir atakla öne geçti.";
            }

            if (pictureBox3.Left > pictureBox1.Left + 5 && pictureBox3.Left > pictureBox2.Left + 5)
            {
                label6.Text = "3 numaralı at liderliği ele geçirdi.";
            }

            if (birinciatgenisligi+pictureBox1.Left>=bitisuzakligi)
            {
                timer1.Enabled = false;
                label6.Text="1 numaralı  at yarışı kazandı!!!";

            }
            if (ikinciatgenisligi + pictureBox2.Left >= bitisuzakligi)
            {
                timer1.Enabled = false;
                label6.Text = "1 numaralı  at yarışı kazandı!!!";

            }
            if (ucuncuatgenisligi + pictureBox3.Left >= bitisuzakligi)
            {
                timer1.Enabled = false;
                label6.Text = "3 numaralı  at yarışı kazandı!!!";

            }



        }

        


        private void Form1_Load(object sender, EventArgs e)
        {
            birinciatsoluzak = pictureBox1.Left;
            ikinciatsoluzak = pictureBox2.Left;
            ucuncuatsoluzak = pictureBox3.Left;
        }
    }
}
