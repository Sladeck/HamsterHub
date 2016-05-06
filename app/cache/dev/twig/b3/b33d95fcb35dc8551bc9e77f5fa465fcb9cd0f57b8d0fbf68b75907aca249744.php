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
        $__internal_dce8b68db1ac48407093ecc3e875efa7b5003ecda6efb889bc3896a9f25ff1fc = $this->env->getExtension("native_profiler");
        $__internal_dce8b68db1ac48407093ecc3e875efa7b5003ecda6efb889bc3896a9f25ff1fc->enter($__internal_dce8b68db1ac48407093ecc3e875efa7b5003ecda6efb889bc3896a9f25ff1fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_dce8b68db1ac48407093ecc3e875efa7b5003ecda6efb889bc3896a9f25ff1fc->leave($__internal_dce8b68db1ac48407093ecc3e875efa7b5003ecda6efb889bc3896a9f25ff1fc_prof);

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
