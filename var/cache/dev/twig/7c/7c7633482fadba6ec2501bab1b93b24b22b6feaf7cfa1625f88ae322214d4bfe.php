<?php

/* @App/base.html.twig */
class __TwigTemplate_bc53ab6600cb0b69c12cdeebf2f184029f2fafb495d4b371fb333e27d4b77067 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5cad51ef13ff48019e0abed37909a552cf83efa81ee12d34f9a0286c3fccfa9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cad51ef13ff48019e0abed37909a552cf83efa81ee12d34f9a0286c3fccfa9b->enter($__internal_5cad51ef13ff48019e0abed37909a552cf83efa81ee12d34f9a0286c3fccfa9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/base.html.twig"));

        $__internal_4d37bbb4ecce0081dc4bfb4236b257023060040864669157918bd21e4e432e30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d37bbb4ecce0081dc4bfb4236b257023060040864669157918bd21e4e432e30->enter($__internal_4d37bbb4ecce0081dc4bfb4236b257023060040864669157918bd21e4e432e30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    <title>Startsymfonies 2</title>

    <!-- Bootstrap CSS -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css\" integrity=\"sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M\" crossorigin=\"anonymous\">

    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css\">

\t";
        // line 16
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 17
        echo "</head>
<body>

<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
    <a class=\"navbar-brand\" href=\"#\">Startsymfonies 2</a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>

    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
        <ul class=\"navbar-nav mr-auto\">
            <li class=\"nav-item\">
                <a class=\"nav-link swalContinue\" href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("scan");
        echo "\">Launch scan</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link swalContinue\" href=\"";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("start-all");
        echo "\">Start all</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link swalContinue\" href=\"";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("stop-all");
        echo "\">Stop all</a>
            </li>
        </ul>
        <form class=\"form-inline my-2 my-lg-0\">
            <div class=\"input-group mb-2 mb-sm-0\">
                <input id=\"search\" type=\"search\" class=\"form-control\" placeholder=\"Search\" aria-label=\"Search\">
                <a href=\"#\" class=\"input-group-addon fa fa-times\" id=\"clearSearch\"></a>
            </div>

            <div class=\"form-check\" style=\"margin-left: 10px;\">
                <label class=\"form-check-label\">
                    <input id=\"flgHideStopped\" type=\"checkbox\" class=\"form-check-input\" checked>
                    Hide stopped
                </label>
            </div>
        </form>
    </div>
</nav>

<div class=\"container-fluid\">
\t";
        // line 55
        $this->displayBlock('body', $context, $blocks);
        // line 56
        echo "</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src=\"https://code.jquery.com/jquery-3.2.1.min.js\" integrity=\"sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=\" crossorigin=\"anonymous\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js\" integrity=\"sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4\" crossorigin=\"anonymous\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js\" integrity=\"sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1\" crossorigin=\"anonymous\"></script>
<script src=\"https://unpkg.com/sweetalert/dist/sweetalert.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js\"></script>

<script>
\t";
        // line 67
        $this->loadTemplate("@App/templates/flashes.js.twig", "@App/base.html.twig", 67)->display($context);
        // line 68
        echo "</script>

";
        // line 70
        $this->displayBlock('javascripts', $context, $blocks);
        // line 71
        echo "</body>
</html>";
        
        $__internal_5cad51ef13ff48019e0abed37909a552cf83efa81ee12d34f9a0286c3fccfa9b->leave($__internal_5cad51ef13ff48019e0abed37909a552cf83efa81ee12d34f9a0286c3fccfa9b_prof);

        
        $__internal_4d37bbb4ecce0081dc4bfb4236b257023060040864669157918bd21e4e432e30->leave($__internal_4d37bbb4ecce0081dc4bfb4236b257023060040864669157918bd21e4e432e30_prof);

    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5396c2213874db6827ccca261e68e63cf4a9a3430d94d622caf5befd5538e220 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5396c2213874db6827ccca261e68e63cf4a9a3430d94d622caf5befd5538e220->enter($__internal_5396c2213874db6827ccca261e68e63cf4a9a3430d94d622caf5befd5538e220_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_a85b9f82d4033e37bb1d8a2346ed0de7b959f3a4a2311be67eda3d2665af3ce4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a85b9f82d4033e37bb1d8a2346ed0de7b959f3a4a2311be67eda3d2665af3ce4->enter($__internal_a85b9f82d4033e37bb1d8a2346ed0de7b959f3a4a2311be67eda3d2665af3ce4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a85b9f82d4033e37bb1d8a2346ed0de7b959f3a4a2311be67eda3d2665af3ce4->leave($__internal_a85b9f82d4033e37bb1d8a2346ed0de7b959f3a4a2311be67eda3d2665af3ce4_prof);

        
        $__internal_5396c2213874db6827ccca261e68e63cf4a9a3430d94d622caf5befd5538e220->leave($__internal_5396c2213874db6827ccca261e68e63cf4a9a3430d94d622caf5befd5538e220_prof);

    }

    // line 55
    public function block_body($context, array $blocks = array())
    {
        $__internal_e9b8338a9940459a478eecb80bc75187e368f0f6f721f412c775b8509a5c9b13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9b8338a9940459a478eecb80bc75187e368f0f6f721f412c775b8509a5c9b13->enter($__internal_e9b8338a9940459a478eecb80bc75187e368f0f6f721f412c775b8509a5c9b13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_39db8e470bed95a26cdde4db27d6f0519e8fd5d8f63a6c1d679b3d7a71ae90fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39db8e470bed95a26cdde4db27d6f0519e8fd5d8f63a6c1d679b3d7a71ae90fa->enter($__internal_39db8e470bed95a26cdde4db27d6f0519e8fd5d8f63a6c1d679b3d7a71ae90fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_39db8e470bed95a26cdde4db27d6f0519e8fd5d8f63a6c1d679b3d7a71ae90fa->leave($__internal_39db8e470bed95a26cdde4db27d6f0519e8fd5d8f63a6c1d679b3d7a71ae90fa_prof);

        
        $__internal_e9b8338a9940459a478eecb80bc75187e368f0f6f721f412c775b8509a5c9b13->leave($__internal_e9b8338a9940459a478eecb80bc75187e368f0f6f721f412c775b8509a5c9b13_prof);

    }

    // line 70
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_38c0517e11809c53bd2022298361635aacdc24cbe0181d0ede4ec1c72875312e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38c0517e11809c53bd2022298361635aacdc24cbe0181d0ede4ec1c72875312e->enter($__internal_38c0517e11809c53bd2022298361635aacdc24cbe0181d0ede4ec1c72875312e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_c76f5ed97ff35f76ac1b681959250453a439e03249bf8d834384a25175560f67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c76f5ed97ff35f76ac1b681959250453a439e03249bf8d834384a25175560f67->enter($__internal_c76f5ed97ff35f76ac1b681959250453a439e03249bf8d834384a25175560f67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_c76f5ed97ff35f76ac1b681959250453a439e03249bf8d834384a25175560f67->leave($__internal_c76f5ed97ff35f76ac1b681959250453a439e03249bf8d834384a25175560f67_prof);

        
        $__internal_38c0517e11809c53bd2022298361635aacdc24cbe0181d0ede4ec1c72875312e->leave($__internal_38c0517e11809c53bd2022298361635aacdc24cbe0181d0ede4ec1c72875312e_prof);

    }

    public function getTemplateName()
    {
        return "@App/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 70,  150 => 55,  133 => 16,  122 => 71,  120 => 70,  116 => 68,  114 => 67,  101 => 56,  99 => 55,  76 => 35,  70 => 32,  64 => 29,  50 => 17,  48 => 16,  36 => 7,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    <title>Startsymfonies 2</title>

    <!-- Bootstrap CSS -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css\" integrity=\"sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M\" crossorigin=\"anonymous\">

    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css\">

\t{% block stylesheets %}{% endblock %}
</head>
<body>

<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
    <a class=\"navbar-brand\" href=\"#\">Startsymfonies 2</a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>

    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
        <ul class=\"navbar-nav mr-auto\">
            <li class=\"nav-item\">
                <a class=\"nav-link swalContinue\" href=\"{{ path('scan') }}\">Launch scan</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link swalContinue\" href=\"{{ path('start-all') }}\">Start all</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link swalContinue\" href=\"{{ path('stop-all') }}\">Stop all</a>
            </li>
        </ul>
        <form class=\"form-inline my-2 my-lg-0\">
            <div class=\"input-group mb-2 mb-sm-0\">
                <input id=\"search\" type=\"search\" class=\"form-control\" placeholder=\"Search\" aria-label=\"Search\">
                <a href=\"#\" class=\"input-group-addon fa fa-times\" id=\"clearSearch\"></a>
            </div>

            <div class=\"form-check\" style=\"margin-left: 10px;\">
                <label class=\"form-check-label\">
                    <input id=\"flgHideStopped\" type=\"checkbox\" class=\"form-check-input\" checked>
                    Hide stopped
                </label>
            </div>
        </form>
    </div>
</nav>

<div class=\"container-fluid\">
\t{% block body %}{% endblock %}
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src=\"https://code.jquery.com/jquery-3.2.1.min.js\" integrity=\"sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=\" crossorigin=\"anonymous\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js\" integrity=\"sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4\" crossorigin=\"anonymous\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js\" integrity=\"sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1\" crossorigin=\"anonymous\"></script>
<script src=\"https://unpkg.com/sweetalert/dist/sweetalert.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js\"></script>

<script>
\t{% include '@App/templates/flashes.js.twig' %}
</script>

{% block javascripts %}{% endblock %}
</body>
</html>", "@App/base.html.twig", "/home/dsabre/Lavoro/2017/startsymfonyes2/src/AppBundle/Resources/views/base.html.twig");
    }
}
