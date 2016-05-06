<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_74c7b49727b8b295666d8c3edb1ad99063bfbc6cbb40116a60110f86dc0281b3 extends Twig_Template
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
        $__internal_1b0e5c3e3e1363e9a692ec9f1d08dd8a2156f38bbaf4a706b433a502bf15dfa6 = $this->env->getExtension("native_profiler");
        $__internal_1b0e5c3e3e1363e9a692ec9f1d08dd8a2156f38bbaf4a706b433a502bf15dfa6->enter($__internal_1b0e5c3e3e1363e9a692ec9f1d08dd8a2156f38bbaf4a706b433a502bf15dfa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_1b0e5c3e3e1363e9a692ec9f1d08dd8a2156f38bbaf4a706b433a502bf15dfa6->leave($__internal_1b0e5c3e3e1363e9a692ec9f1d08dd8a2156f38bbaf4a706b433a502bf15dfa6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
