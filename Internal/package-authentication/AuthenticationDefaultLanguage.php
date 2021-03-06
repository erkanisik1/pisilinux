<?php namespace ZN\Authentication;
/**
 * ZN PHP Web Framework
 * 
 * "Simplicity is the ultimate sophistication." ~ Da Vinci
 * 
 * @package ZN
 * @license MIT [http://opensource.org/licenses/MIT]
 * @author  Ozan UYKUN [ozan@znframework.com]
 */

/**
 * Default Language
 * 
 * Enabled when the language file can not be accessed.
 */
class AuthenticationDefaultLanguage
{
    /*
    |--------------------------------------------------------------------------
    | User
    |--------------------------------------------------------------------------
    |
    | The language of the User library.
    |
	*/

    public $en = 
    [
        'registerSuccess'          => 'Your registration was completed successfully.',
        'registerError'            => 'You have already registered with the system for the transaction could not be performed!',
        'registerEmailError'       => 'Your process because the system could not be performed previously registered e-mail!',
        'registerUsernameError'    => "The data should include the user name and password!",
        'loginError'               => 'Login failed. The user name or password is incorrect!',
        'bannedError'              => 'You can not login because you have been banned from the system!',
        'loginSuccess'             => 'You have logged in successfully. Redirecting .. Please wait.',
        'registerUnknownError'     => 'Unknown error!',
        'oldPasswordError'         => 'You have entered the wrong password!',
        'passwordNotMatchError'    => 'Passwords do not match!',
        'updateProcessSuccess'     => 'The update process is successful.',
        'forgotPasswordError'      => "You are not registered on the system or your username is incorrect!",
        'forgotPasswordSuccess'    => "Your password has been sent to your email.",
        'newYourPassword'          => "Sent New Password.",
        'emailError'               => "Don't send your mail!",
        'emailImformationError'    => "E-mail information is found!",
        'username'                 => "User Name",
        'password'                 => "Password",
        'learnNewPassword'         => "Click to login with your new password.",
        'activation'               => "Click to complete the activation process.",
        'activationProcess'        => "User activation process.",
        'activationError'          => "You can not log in to complete the activation process.",
        'activationEmail'          => "For the completion of your registration, please click on the activation link sent to your e-mail address.",
        'activationCompleteError'  => "The activation process could not be completed!",
        'activationComplete'       => "The activation process is completed with success.",
        'resendActivationError'    => 'Activation code e-mail could not be sent if the specified e-mail address has already been activated!',
        'verificationEmail'        => 'Verification Email',
        'verificationOrEmailError' => 'Verification code or email information is wrong!'
    ];	

    public $tr = 
    [
        'registerSuccess'          => 'Kayd??n??z?? ba??ar?? ile tamamland??.',
        'registerError'            => 'Sisteme daha ??nceden kay??t oldu??unuz i??in i??leminiz ger??ekle??tirilemedi!',
        'registerEmailError'       => 'Sisteme daha ??nceden kay??tl?? e-posta oldu??u i??in i??leminiz ger??ekle??tirilemedi!',
        'registerUsernameError'    => 'Veri, kullan??c?? ad?? ve ??ifre bilgisini i??ermelidir!',
        'loginError'               => 'Giri?? ba??ar??s??z. Kullan??c?? ad?? veya ??ifre yanl????!',
        'bannedError'              => 'Sistemden banlam???? oldu??unuz i??in giri?? yapamazs??n??z!',
        'loginSuccess'             => 'Ba??ar?? ile giri?? yapt??n??z. Y??nlendiriliyorsunuz.. L??tfen bekleyin.',
        'registerUnknownError'     => 'Bilinmeyen hata!',
        'oldPasswordError'         => '??ifrenizi yanl???? girdiniz!',
        'passwordNotMatchError'    => '??ifreler uyumlu de??il!',
        'updateProcessSuccess'     => 'G??ncelleme i??lemi ba??ar??l??.',
        'forgotPasswordError'      => 'Sistemde kay??tl?? de??ilsiniz ya da kullan??c?? ad??n??z yanl????!',
        'forgotPasswordSuccess'    => '??ifreniz e-postan??za g??nderilmi??tir.',
        'newYourPassword'          => 'G??nderilen Yeni ??ifreniz.',
        'emailError'               => 'E-posta g??nderilemedi!',
        'emailImformationError'    => 'E-posta bilgisi bulunmamaktad??r!',
        'username'                 => 'Kullan??c?? Ad??n??z',
        'password'                 => '??ifreniz',
        'learnNewPassword'         => 'Yeni ??ifrenizle giri?? yapmak i??in l??tfen t??klay??n??z.',
        'activation'               => 'Aktivasyon i??lemini tamamlamak i??in t??klay??n??z.',
        'activationProcess'        => '??ye aktivasyon i??lemi.',
        'activationError'          => 'Aktivasyon i??lemini tamamlamadan giri?? yapamazs??n??z.',
        'activationEmail'          => 'Kayd??n??z??n tamamlanmas?? i??in l??tfen e-posta adresinize g??nderilen aktivasyon linkine t??klay??n??z.',
        'activationCompleteError'  => 'Aktivasyon i??lemi tamamlanamad??!',
        'activationComplete'       => 'Aktivasyon i??lemi ba??ar?? ile tamamland??.',
        'resendActivationError'    => 'Belirtilen e-posta adresinin etkinle??tirilmesi zaten yap??lm???? oldu??undan aktivasyon kodu e-postas?? g??nderilemedi!',
        'verificationEmail'        => 'Do??rulama E-postas??',
        'verificationOrEmailError' => 'Do??rulama kodu veya Eposta bilgisi yanl????!'
    ];
}
