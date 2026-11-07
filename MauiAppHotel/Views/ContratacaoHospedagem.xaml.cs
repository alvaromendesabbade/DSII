using MauiAppHotel.Views;

namespace MauiAppHotel.Views;

public partial class ContratacaoHospedagem : ContentPage
{
    public ContratacaoHospedagem()
    {
        InitializeComponent();

        pck_quarto.ItemsSource = new List<string>
        {
            "Suíte Standard",
            "Suíte Luxo",
            "Suíte Família",
            "Suíte Presidencial"
        };
    }

    private async void OnAvancarClicked(object sender, EventArgs e)
    {
        if (pck_quarto.SelectedItem is null)
        {
            await DisplayAlert(
                "Atenção",
                "Selecione uma acomodação antes de avançar.",
                "OK");

            return;
        }

        await Navigation.PushAsync(new HospedagemContratada());
    }

    private async void OnSobreClicked(object sender, EventArgs e)
    {
        await Navigation.PushAsync(new SobrePage());
    }
}