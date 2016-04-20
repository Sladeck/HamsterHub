<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_b7fe43f2eb3131342e95b65de9aeae7b35c23f63c88170a9e48d1b20e3e8067c extends Twig_Template
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
        $__internal_d788811b48fb30936ce36d0711ec039a088b02a029884fd154ac7ed7f24c136b = $this->env->getExtension("native_profiler");
        $__internal_d788811b48fb30936ce36d0711ec039a088b02a029884fd154ac7ed7f24c136b->enter($__internal_d788811b48fb30936ce36d0711ec039a088b02a029884fd154ac7ed7f24c136b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_d788811b48fb30936ce36d0711ec039a088b02a029884fd154ac7ed7f24c136b->leave($__internal_d788811b48fb30936ce36d0711ec039a088b02a029884fd154ac7ed7f24c136b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
