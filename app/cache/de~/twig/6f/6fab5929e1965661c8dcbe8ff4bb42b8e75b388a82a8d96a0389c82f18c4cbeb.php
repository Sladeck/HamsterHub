<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_70de7f079c269f84e56fe97637f99ab0d0a6f56604a609aca64ecd603ea32169 extends Twig_Template
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
        $__internal_269a048c110ff3ad3b97db5ee334df1b20f9c8543b47feca5f9d625d8d966b0f = $this->env->getExtension("native_profiler");
        $__internal_269a048c110ff3ad3b97db5ee334df1b20f9c8543b47feca5f9d625d8d966b0f->enter($__internal_269a048c110ff3ad3b97db5ee334df1b20f9c8543b47feca5f9d625d8d966b0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_269a048c110ff3ad3b97db5ee334df1b20f9c8543b47feca5f9d625d8d966b0f->leave($__internal_269a048c110ff3ad3b97db5ee334df1b20f9c8543b47feca5f9d625d8d966b0f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
