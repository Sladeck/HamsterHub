<?php
namespace UserBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
class RegisterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('birthdate', 'date', array(
            'format' => 'dd / MM / yyyy',
            'years' => range(\date("Y") - 12, \date("Y") - 100),
            'label' => 'form.birthdate',
            'translation_domain' => 'FOSUserBundle'
        ));
    }
    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';
    }
    public function getBlockPrefix()
    {
        return 'app_user_registration';
    }

    public function getName()
    {
        return $this->getBlockPrefix();
    }
}
