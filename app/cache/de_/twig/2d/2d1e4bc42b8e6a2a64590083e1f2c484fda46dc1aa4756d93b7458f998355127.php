<?php

/* ::base.html.twig */
class __TwigTemplate_aa1e59682b9fb76fbcd72d1f5e94ae699409e0fda1be741336aa7c1355572e94 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ef9b0086de3c6c5655200dc1f4e54ee8cfb2df70a36466346e8e72963a0db023 = $this->env->getExtension("native_profiler");
        $__internal_ef9b0086de3c6c5655200dc1f4e54ee8cfb2df70a36466346e8e72963a0db023->enter($__internal_ef9b0086de3c6c5655200dc1f4e54ee8cfb2df70a36466346e8e72963a0db023_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_ef9b0086de3c6c5655200dc1f4e54ee8cfb2df70a36466346e8e72963a0db023->leave($__internal_ef9b0086de3c6c5655200dc1f4e54ee8cfb2df70a36466346e8e72963a0db023_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_81628c1eef8992c19935ceac0ea102a3732e2fc60f4952154bd10a8c13fd6997 = $this->env->getExtension("native_profiler");
        $__internal_81628c1eef8992c19935ceac0ea102a3732e2fc60f4952154bd10a8c13fd6997->enter($__internal_81628c1eef8992c19935ceac0ea102a3732e2fc60f4952154bd10a8c13fd6997_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_81628c1eef8992c19935ceac0ea102a3732e2fc60f4952154bd10a8c13fd6997->leave($__internal_81628c1eef8992c19935ceac0ea102a3732e2fc60f4952154bd10a8c13fd6997_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f9832268c1cbb2b0569b1662419d1615b33f8ccb687a2133d8ee6d39f5ad45eb = $this->env->getExtension("native_profiler");
        $__internal_f9832268c1cbb2b0569b1662419d1615b33f8ccb687a2133d8ee6d39f5ad45eb->enter($__internal_f9832268c1cbb2b0569b1662419d1615b33f8ccb687a2133d8ee6d39f5ad45eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_f9832268c1cbb2b0569b1662419d1615b33f8ccb687a2133d8ee6d39f5ad45eb->leave($__internal_f9832268c1cbb2b0569b1662419d1615b33f8ccb687a2133d8ee6d39f5ad45eb_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_e26907683bb8cac6ff0ff39c7cdf30eb53d8fa97347926a2f182da178d6f6df4 = $this->env->getExtension("native_profiler");
        $__internal_e26907683bb8cac6ff0ff39c7cdf30eb53d8fa97347926a2f182da178d6f6df4->enter($__internal_e26907683bb8cac6ff0ff39c7cdf30eb53d8fa97347926a2f182da178d6f6df4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e26907683bb8cac6ff0ff39c7cdf30eb53d8fa97347926a2f182da178d6f6df4->leave($__internal_e26907683bb8cac6ff0ff39c7cdf30eb53d8fa97347926a2f182da178d6f6df4_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_524c7a5216b75b8e03e623405f37b98be6fa654e553858c0b82bb7e7865dda69 = $this->env->getExtension("native_profiler");
        $__internal_524c7a5216b75b8e03e623405f37b98be6fa654e553858c0b82bb7e7865dda69->enter($__internal_524c7a5216b75b8e03e623405f37b98be6fa654e553858c0b82bb7e7865dda69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_524c7a5216b75b8e03e623405f37b98be6fa654e553858c0b82bb7e7865dda69->leave($__internal_524c7a5216b75b8e03e623405f37b98be6fa654e553858c0b82bb7e7865dda69_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
