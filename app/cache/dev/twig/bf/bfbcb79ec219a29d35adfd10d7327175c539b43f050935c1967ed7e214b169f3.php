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
        $__internal_139dc2d567e4d8ddaf8de7c2f8fa1611bdfce06115ac6124355711cbfe49c275 = $this->env->getExtension("native_profiler");
        $__internal_139dc2d567e4d8ddaf8de7c2f8fa1611bdfce06115ac6124355711cbfe49c275->enter($__internal_139dc2d567e4d8ddaf8de7c2f8fa1611bdfce06115ac6124355711cbfe49c275_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_139dc2d567e4d8ddaf8de7c2f8fa1611bdfce06115ac6124355711cbfe49c275->leave($__internal_139dc2d567e4d8ddaf8de7c2f8fa1611bdfce06115ac6124355711cbfe49c275_prof);

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
