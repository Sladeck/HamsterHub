<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_bb0a1242ce7eb45d77a9a624eb9e4eebcee6957bff449d7b5dd4e5dec4b33fb6 extends Twig_Template
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
        $__internal_f30498ca5ef49d8d24db1e699e2c56c1b8aedeeef19fead1665ba34ee62551fd = $this->env->getExtension("native_profiler");
        $__internal_f30498ca5ef49d8d24db1e699e2c56c1b8aedeeef19fead1665ba34ee62551fd->enter($__internal_f30498ca5ef49d8d24db1e699e2c56c1b8aedeeef19fead1665ba34ee62551fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_f30498ca5ef49d8d24db1e699e2c56c1b8aedeeef19fead1665ba34ee62551fd->leave($__internal_f30498ca5ef49d8d24db1e699e2c56c1b8aedeeef19fead1665ba34ee62551fd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
