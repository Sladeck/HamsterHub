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
        $__internal_d5a9764681d28b53b6eb9141cbe5094a736fbeefc409bbbdab52787ee7e31fe0 = $this->env->getExtension("native_profiler");
        $__internal_d5a9764681d28b53b6eb9141cbe5094a736fbeefc409bbbdab52787ee7e31fe0->enter($__internal_d5a9764681d28b53b6eb9141cbe5094a736fbeefc409bbbdab52787ee7e31fe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_d5a9764681d28b53b6eb9141cbe5094a736fbeefc409bbbdab52787ee7e31fe0->leave($__internal_d5a9764681d28b53b6eb9141cbe5094a736fbeefc409bbbdab52787ee7e31fe0_prof);

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
