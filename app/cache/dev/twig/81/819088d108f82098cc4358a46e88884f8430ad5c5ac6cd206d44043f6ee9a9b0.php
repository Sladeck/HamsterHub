<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_a583d1f51b99ce04a92c86bb66310a44d87e606070be438928594ac45440c52d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_72a5c59b47f0b333560fa71e753d367cd384420d247b8c70647f5610bd4f617b = $this->env->getExtension("native_profiler");
        $__internal_72a5c59b47f0b333560fa71e753d367cd384420d247b8c70647f5610bd4f617b->enter($__internal_72a5c59b47f0b333560fa71e753d367cd384420d247b8c70647f5610bd4f617b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_72a5c59b47f0b333560fa71e753d367cd384420d247b8c70647f5610bd4f617b->leave($__internal_72a5c59b47f0b333560fa71e753d367cd384420d247b8c70647f5610bd4f617b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_11f629e34ee7de80b88e78558b9621960be0e418f536db621daca1b852a688ad = $this->env->getExtension("native_profiler");
        $__internal_11f629e34ee7de80b88e78558b9621960be0e418f536db621daca1b852a688ad->enter($__internal_11f629e34ee7de80b88e78558b9621960be0e418f536db621daca1b852a688ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_11f629e34ee7de80b88e78558b9621960be0e418f536db621daca1b852a688ad->leave($__internal_11f629e34ee7de80b88e78558b9621960be0e418f536db621daca1b852a688ad_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_8625cad737f00a510f4ab275fd94f53dbce2919ba01fdffbce59553fb6f5ea2d = $this->env->getExtension("native_profiler");
        $__internal_8625cad737f00a510f4ab275fd94f53dbce2919ba01fdffbce59553fb6f5ea2d->enter($__internal_8625cad737f00a510f4ab275fd94f53dbce2919ba01fdffbce59553fb6f5ea2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_8625cad737f00a510f4ab275fd94f53dbce2919ba01fdffbce59553fb6f5ea2d->leave($__internal_8625cad737f00a510f4ab275fd94f53dbce2919ba01fdffbce59553fb6f5ea2d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
