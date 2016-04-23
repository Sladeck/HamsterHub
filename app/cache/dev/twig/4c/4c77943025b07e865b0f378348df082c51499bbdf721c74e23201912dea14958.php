<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_8877be4b459d05b9c8494e6861b80a64066d4e9c3fe102b7469c47d5a4b86e0e extends Twig_Template
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
        $__internal_ab7b2d9f9ecc142550ce151a5b03a5500e4d9b92ac774fdf2f9ee5af0efb9d86 = $this->env->getExtension("native_profiler");
        $__internal_ab7b2d9f9ecc142550ce151a5b03a5500e4d9b92ac774fdf2f9ee5af0efb9d86->enter($__internal_ab7b2d9f9ecc142550ce151a5b03a5500e4d9b92ac774fdf2f9ee5af0efb9d86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_ab7b2d9f9ecc142550ce151a5b03a5500e4d9b92ac774fdf2f9ee5af0efb9d86->leave($__internal_ab7b2d9f9ecc142550ce151a5b03a5500e4d9b92ac774fdf2f9ee5af0efb9d86_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
