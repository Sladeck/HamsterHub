<?php

/* base.html.twig */
class __TwigTemplate_270f789a4fcb6e6ef85363d13d7f79c9b40761cf316aa39576dac5fb714e4250 extends Twig_Template
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
        $__internal_7ed2711d65088f642f649ec893c662ba3cbc169de2eb59b0409c14895bbc95a2 = $this->env->getExtension("native_profiler");
        $__internal_7ed2711d65088f642f649ec893c662ba3cbc169de2eb59b0409c14895bbc95a2->enter($__internal_7ed2711d65088f642f649ec893c662ba3cbc169de2eb59b0409c14895bbc95a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_7ed2711d65088f642f649ec893c662ba3cbc169de2eb59b0409c14895bbc95a2->leave($__internal_7ed2711d65088f642f649ec893c662ba3cbc169de2eb59b0409c14895bbc95a2_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_fff96ade37c487b1ef71094d2c65a42ad75355a16a69d05c4eb74921acb44ac6 = $this->env->getExtension("native_profiler");
        $__internal_fff96ade37c487b1ef71094d2c65a42ad75355a16a69d05c4eb74921acb44ac6->enter($__internal_fff96ade37c487b1ef71094d2c65a42ad75355a16a69d05c4eb74921acb44ac6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_fff96ade37c487b1ef71094d2c65a42ad75355a16a69d05c4eb74921acb44ac6->leave($__internal_fff96ade37c487b1ef71094d2c65a42ad75355a16a69d05c4eb74921acb44ac6_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c24798d75426ed39a4c932ef68abf5b2e715fe04a4b0a160c51b40db8a023444 = $this->env->getExtension("native_profiler");
        $__internal_c24798d75426ed39a4c932ef68abf5b2e715fe04a4b0a160c51b40db8a023444->enter($__internal_c24798d75426ed39a4c932ef68abf5b2e715fe04a4b0a160c51b40db8a023444_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_c24798d75426ed39a4c932ef68abf5b2e715fe04a4b0a160c51b40db8a023444->leave($__internal_c24798d75426ed39a4c932ef68abf5b2e715fe04a4b0a160c51b40db8a023444_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_52af88c03c854ab26bcecc37d2a8da4aaa76e4e49a3b08be3b93417cb8c2f4fd = $this->env->getExtension("native_profiler");
        $__internal_52af88c03c854ab26bcecc37d2a8da4aaa76e4e49a3b08be3b93417cb8c2f4fd->enter($__internal_52af88c03c854ab26bcecc37d2a8da4aaa76e4e49a3b08be3b93417cb8c2f4fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_52af88c03c854ab26bcecc37d2a8da4aaa76e4e49a3b08be3b93417cb8c2f4fd->leave($__internal_52af88c03c854ab26bcecc37d2a8da4aaa76e4e49a3b08be3b93417cb8c2f4fd_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e66a02a0d3e7f11db02bf3b4894a7754b57a52ace31830ca373c60453e88bc12 = $this->env->getExtension("native_profiler");
        $__internal_e66a02a0d3e7f11db02bf3b4894a7754b57a52ace31830ca373c60453e88bc12->enter($__internal_e66a02a0d3e7f11db02bf3b4894a7754b57a52ace31830ca373c60453e88bc12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e66a02a0d3e7f11db02bf3b4894a7754b57a52ace31830ca373c60453e88bc12->leave($__internal_e66a02a0d3e7f11db02bf3b4894a7754b57a52ace31830ca373c60453e88bc12_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
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
