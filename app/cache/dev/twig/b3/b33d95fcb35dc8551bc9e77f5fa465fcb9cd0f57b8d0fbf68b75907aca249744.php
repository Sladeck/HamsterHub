<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_73a67a2200c28452346820ec08ddfddc54d211b0f6d8e1f6d69ed2098304aee9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fa6a62f47f8d4b382ef8c5b2047e3791bfe0c96edd034a2bc003819bf0c779c6 = $this->env->getExtension("native_profiler");
        $__internal_fa6a62f47f8d4b382ef8c5b2047e3791bfe0c96edd034a2bc003819bf0c779c6->enter($__internal_fa6a62f47f8d4b382ef8c5b2047e3791bfe0c96edd034a2bc003819bf0c779c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_fa6a62f47f8d4b382ef8c5b2047e3791bfe0c96edd034a2bc003819bf0c779c6->leave($__internal_fa6a62f47f8d4b382ef8c5b2047e3791bfe0c96edd034a2bc003819bf0c779c6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
