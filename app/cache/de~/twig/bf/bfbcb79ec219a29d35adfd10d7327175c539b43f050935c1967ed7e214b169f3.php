<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_e17a3ac80987a72770544659d8c6105b6722208c8c5d6aa9ca49abf05b601a89 extends Twig_Template
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
        $__internal_a576f8c0cfc5ca75279b4c9ddaa1c0c963f7ef7988cca33e0650178341b6e958 = $this->env->getExtension("native_profiler");
        $__internal_a576f8c0cfc5ca75279b4c9ddaa1c0c963f7ef7988cca33e0650178341b6e958->enter($__internal_a576f8c0cfc5ca75279b4c9ddaa1c0c963f7ef7988cca33e0650178341b6e958_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_a576f8c0cfc5ca75279b4c9ddaa1c0c963f7ef7988cca33e0650178341b6e958->leave($__internal_a576f8c0cfc5ca75279b4c9ddaa1c0c963f7ef7988cca33e0650178341b6e958_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */